<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }

    public function products()
    {
        $products = Product::all();
        return view('admin.products', [
            'products' => $products
        ]);
    }

    public function product(Product $product)
    {
        return view('admin.product', compact('product'));
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users', [
            'users' => $users
        ]);
    }
}
