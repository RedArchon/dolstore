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
    public function admin()
    {
        abort_unless(\App\user::where('id', auth()->id())->get()->pluck('admin')[0] == 1, 403);

        return view('admin.index');
    }
}
