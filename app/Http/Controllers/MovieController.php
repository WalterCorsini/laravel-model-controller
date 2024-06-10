<?php

namespace App\Http\Controllers;

use App\Models\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $moviesList = Movie::all();
        foreach($moviesList as $movie){
            $movie['vote'] = floor($movie['vote']/2);
            for($i=0; $i<$movie['vote']; $i++){
                $movie['star'] .= "<i class='fa-solid fa-star'></i>";
            }
            for($i=0; $i<5-$movie['vote']; $i++){
                $movie['star'] .= "<i class='fa-regular fa-star'></i>";
            }
        }
        // dd($moviesList);
        return view('movie',compact('moviesList'));
    }

    public function best(){
            $bestSeller = Movie::where('vote', ">=", '9')->get();
            return view('bestseller',compact('bestSeller'));
        }
}
