<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Sale;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        $games = Game::select([
            'id',
            'name',
            'developer',
            'image'
        ])
        ->paginate(10);

        $sales = Sale::select([
            'id',
            'name_item',
            'total_item',
            'price_normal',
            'price_promo',
            'stock',
            'pictures'
        ])
        ->paginate(10)
        ;

    return view('welcome.index' , compact('games' ,'sales'));
    }



    public function promo(){
        return view('welcome.promo');
    }
    public function game(){
        return view('welcome.game');
    }
    public function transaksi(){
        return view('welcome.transaksi');
    }
    public function account(){
        return view ('auth.account');
    }
    public function contact(){
        return view ('welcome.contact');
    }
}
