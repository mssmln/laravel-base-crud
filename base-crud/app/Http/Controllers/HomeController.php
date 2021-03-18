<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function form(){ //usiamo lo stesso controller file per più pagine statiche che non hanno bisogno di dati dal back end
        return view('form');
    }
}
