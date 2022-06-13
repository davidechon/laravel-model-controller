<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    //  - All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.
    public function index(){
        $movies = Movie::all();
        // dd($movies);
        return view('home', compact('movies'));
       }



}
