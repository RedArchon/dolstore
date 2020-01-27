<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class WebController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::all();
        if (!$featuredProducts->isEmpty()) {
            $featuredProducts->random(4);
        } else {
            $featuredProducts = null;
        }

        return view('welcome', [
            'products' => $featuredProducts
        ]);
    }
}
