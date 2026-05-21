<?php

namespace App\Http\Controllers;
use App\Models\MainPages;

class MainController extends Controller
{   
    public function index(){
        $mainPages = MainPages::all();
        
        return view('main.index', compact('mainPages'));
    }
}
