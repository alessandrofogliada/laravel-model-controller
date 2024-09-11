<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function movies (){

        $movies = Movie::all();

        return view('movies' , compact('movies'));
    }

    public function about (){
        return view('about');
    }

    public function contacts (){
        return view('contacts');
    }
}
