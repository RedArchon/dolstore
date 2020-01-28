<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class WebController extends Controller
{
    public function index()
    {
        if (Product::all()->count() >= 4) {
            $featuredProducts = Product::all()->random(4);
        } else {
            $featuredProducts = null;
        }
        return view('welcome', [
            'products' => $featuredProducts
        ]);
    }
}
