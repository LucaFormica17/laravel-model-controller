<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Movie;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('homepage', compact('movies'));
    }
}


