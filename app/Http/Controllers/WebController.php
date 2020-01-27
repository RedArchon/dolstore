<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class WebController extends Controller
{
    public function index()
    {
        if (count(Product::all()) > 0) {
            $featuredProducts =  Product::all()->random(4);
        } 
        return view('welcome', [
            'products' => $featuredProducts
        ]);
    }
}
