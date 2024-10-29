<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view ('dashboard.index');
    }

    public function index(){
        return view ('dashboard.index');
    }

    public function indexdata(){
        return view ('dashboard.indexdata');
    }
}
