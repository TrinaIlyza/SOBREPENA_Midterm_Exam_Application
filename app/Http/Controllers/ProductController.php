<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $movies = [
            ['title' => 'Inception', 'director' => 'Christopher Nolan', 'genre' => 'Sci-Fi', 'rating' => 8.8],
            ['title' => 'The Shawshank Redemption', 'director' => 'Frank Darabont', 'genre' => 'Drama', 'rating' => 9.3],
            ['title' => 'The Godfather', 'director' => 'Francis Ford Coppola', 'genre' => 'Crime', 'rating' => 9.2],
            ['title' => 'The Dark Knight', 'director' => 'Christopher Nolan', 'genre' => 'Action', 'rating' => 9.0],
        ];

        return view('products', ['movies' => $movies]);
    }
}
