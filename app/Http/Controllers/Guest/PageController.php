<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $title = 'La mia libreria';
        // SELECT * from movies
        $movies = Movie::all();
        // dd($movies);
        return view('home', compact('movies', 'title'));
    }

    public function americanMovies()
    {
        $title = 'Film Americani';
        $movies = Movie::where('nationality', '=', 'american')->get();
        return view('movies', compact('movies', 'title'));
    }

    public function movies()
    {
        return view('movies');
    }
}
