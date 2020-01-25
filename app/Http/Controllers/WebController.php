<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class WebController extends Controller
{
    public function index()
    {
        $featuredProducts =  Product::all()->random(4);
        return view('welcome', [
            'products' => $featuredProducts
        ]);
    }
}
