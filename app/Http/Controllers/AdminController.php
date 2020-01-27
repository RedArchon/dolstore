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
        return view('admin.products.index', [
            'products' => $products
        ]);
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users.index', [
            'users' => $users
        ]);
    }
    public function orders()
    {
        // $orders = Order::all();
        // return view('admin.orders.index', [
        //     'orders' => $orders
        // ]);
    }
}
