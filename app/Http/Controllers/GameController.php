<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Requests\StoregameRequest;
use App\Http\Requests\UpdategameRequest;

class GameController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request )
    {
        $games = Game::select([
            'id',
            'name',
            'developer',
            'image'
        ])
        ->paginate(10);

        return view ('dashboard.games.index' , compact('games'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
        return view ('dashboard.games.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoregameRequest $request)
    {
        try{

            $validatedData = $request -> validate([
                'name' => 'required|string',
                'developer' => 'required|string',
                'image' => 'image|mimes:jpeg,png,jpg|max:2048|required'
            ]);

            if($request -> hasFile('image')){
                $file = $request -> file('image');
                $fileName = time().'_'.str_replace([' ', '%', '#', '@', '+', '=', '?', '&', '$', '^'] ,'-' , $file->getClientOriginalName());
                $file->storeAs('public/games/games_covers', $fileName);

            }else{
                $fileName = 'not_set.png';
            }
            $validatedData['image'] = $fileName;

            Game::create($validatedData);

            return redirect ('games');

        }

        catch(\Exception $e)
        {
            dd($e->getMessage());
            return view ('games.create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(game $game ,$id)
    {
        $game = Game::findOrFail($id);
        return view ('dashboard.games.edit' , compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdategameRequest $request, game $game ,$id)
    {
        try{
            // dd($request);
            $game = Game::findOrFail($id);
            $validatedData = $request->validate([
                'name' => 'required|string|max:100',
                'developer' => 'nullable|string',
                'image' =>'image|mimes:jpeg,png,jpg|max:2048'
            ]);

            $fileName = $game->image; // kalau image tidak diedit, maka namanya sama
            if ($request->hasFile('image')) { // kalau  image diedit
                $file = $request->file('image'); //menampung nilai requestr file
                // Ganti spasi dengan strip dan hapus karakter khusus lainnya
                $fileName = time() . '_' . str_replace([' ', '%', '#', '@', '+', '=', '?', '&', '$', '^'], '-', $file->getClientOriginalName());
                $file->storeAs('public/games/games_covers', $fileName);
                //untuk mengetahui apakah file lama perlu dihapus
                if ($game->image != $file->getClientOriginalName() && $game->image != 'not_set.png' && $game->image == $game->image ) {
                    unlink(storage_path('app/public/games/games_covers/' . $game->image));
                }
            }
            $validatedData['image'] = $fileName;

            $game->update($validatedData);

            return redirect()->route('games.index');

        }

        catch(\Exception $e){
            return redirect()->route('games.edit' ,$id);

            // dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)

    {
    $game = Game::findOrFail($id);
    if ($game->image != 'not_set.png') {
        if (file_exists(storage_path('app/public/games/games_covers/' . $game->image))) {
            unlink(storage_path('app/public/games/games_covers/' . $game->image));
        }
    }
    $game->delete();

    return redirect()->route('games.index');
}

}
