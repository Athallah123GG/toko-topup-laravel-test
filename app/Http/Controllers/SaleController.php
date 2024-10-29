<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateSaleRequest;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sale::select([
            'id',
            'name_item',
            'total_item',
            'price_normal',
            'price_promo',
            'stock',
            'pictures',
        ])
        ->paginate(10)
        ;

        return view('dashboard.sale.index' , compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dashboard.sale.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSaleRequest $request)
    {
        try{

            $validatedData = $request -> validate([
                'name_item' => 'required|string',
                'total_item' => 'required|string',
                'price_normal' => 'required|string',
                'price_promo' => 'required|string',
                'stock' => 'required|string',
                'pictures' => 'image|mimes:jpeg,png,jpg|max:2048|required'
            ]);

            if($request -> hasFile('pictures')){
                $file = $request -> file('pictures');
                $fileName = time().'_'.str_replace([' ', '%', '#', '@', '+', '=', '?', '&', '$', '^'] ,'-' , $file->getClientOriginalName());
                $file->storeAs('public/sale/sale_covers', $fileName);

            }else{
                $fileName = 'not_set.png';
            }
            $validatedData['pictures'] = $fileName;

            Sale::create($validatedData);

            return redirect ('sale');

        }

        catch(\Exception $e)
        {
            dd($e->getMessage());
            return view ('sale.create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSaleRequest $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale $sale ,$id)
    {
        $sale = Sale::findorfail($id);
        if ($sale->image != 'not_set.png') {
            if (file_exists(storage_path('app/public/sales/sales_covers/' . $sale->image))) {
                unlink(storage_path('app/public/sale/sale_covers/' . $sale->image));
            }
        }

        $sale->delete();
        return redirect()->route('sale.index');
    }
}
