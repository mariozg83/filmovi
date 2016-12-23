<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
    public function index()
	{
		$movies = movie::orderBy('created_at', 'asc')->get();
	
		return view('index', ['movies'=> $movies]);
	}
}
