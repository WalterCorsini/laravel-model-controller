<?php

namespace App\Http\Controllers;

use App\Models\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $moviesList = Movie::all();
        dd($moviesList);
        return view('movie',compact('moviesList'));
    }
}
