<?php

namespace App\Http\Controllers;

use App\Models\Entertainment;
use App\Http\Requests\StoreEntertainmentRequest;
use App\Http\Requests\UpdateEntertainmentRequest;

class EntertainmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $entertainment = entertainment::select([
            'id',
            'name',
            'developer',
            'image'

        ])
        ->paginate(10);

        return view ('dashboard.entertainment.index' , compact('entertainment'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dashboard.entertainment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEntertainmentRequest $request)
    {
        $validatedData = $request -> validate([
            'name' => 'required|string',
            'developer' => 'required|string',
            'image' => 'image|mimes:png,jpg,jpeg|max:2048|required'
        ]);

        if($request -> hasFile('image')){
            $file = $request -> file('image');
            // $fileName => time();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Entertainment $entertainment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entertainment $entertainment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEntertainmentRequest $request, Entertainment $entertainment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $entertainment = Entertainment::findOrFail($id);
        

        $entertainment->delete();
    }
}
