<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EntertainmentController;
use App\Http\Controllers\SaleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' ,[MainController::class, 'index'])->name('welcome');
Route::get('/game',[MainController::class,'game'])->name('game');
Route::get('/promo',[MainController::class,'promo'])->name('promo');
Route::get('/transaksi',[MainController::class,'transaksi'])->name('transaksi');
Route::get('/account',[MainController::class,'account'])->name('account');
Route::get('/contact', [MainController::class,'contact'])->name('contact');

// Login
Route::get('/login' , [AuthController::class , 'index']) -> name('login');
Route::post('/authenticate' , [AuthController::class , 'authenticate']) -> name('authenticate');

// Register
Route::get('/register' , [AuthController::class , 'register'])->name('register');
Route::post('/storeUser' , [AuthController::class, 'storeUser'])->name('storeUser');


// Logout
Route::get('/unauthenticate' , [AuthController::class , 'unauthenticate'])->name('unauthenticate');

// Middleware
Route::group(['middleware' => ['auth','admin_middleware']],function(){

    Route::get('/dashboard' ,[DashboardController::class , 'dashboard'])->name('dashboard');
    Route::get('/index' ,[DashboardController::class , 'index'])->name('index');
    Route::get('/indexdata' ,[DashboardController::class , 'indexdata'])->name('indexdata');

    // Game
    Route::get('/games', [GameController::class, 'index'])->name('games.index');
    Route::get('/games/create', [GameController::class, 'create'])->name('games.create');
    Route::post('/games', [GameController::class, 'store'])->name('games.store');
    Route::delete('/game/{id}', [GameController::class, 'destroy'])->name('game.destroy');
    Route::get('/games/{id}/edit' , [GameController::class, 'edit'])->name('games.edit');
    Route::put('/games/{id}', [GameController::class, 'update'])->name('games.update');


    // Flash Sale Promo
    Route::get('/sale' , [SaleController::class, 'index'])->name('sale.index');
    Route::get('/sale/create', [SaleController::class, 'create'])->name('sale.create');
    Route::post('/sale', [SaleController::class, 'store'])->name('sale.store');
    Route::delete('/sale/{id}' , [SaleController::class , 'destroy'])->name('sale.destroy');

    //Entertainment
    Route::get('/entertainment' , [EntertainmentController::class , 'index'])->name('entertainment.index');
    Route::get('/entertainment/create' , [EntertainmentController::class , 'create'])->name('entertainment.create');
    Route::post('/entertainment' , [EntertainmentController::class , 'store'])->name('entertainment.store');
    Route::put('/entertainment/{id}' , [EntertainmentController::class,'update'])->name('games.update');
    

});
