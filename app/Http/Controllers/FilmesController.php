<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function index(){
        
        return view('pages.filmes');
    }
}
