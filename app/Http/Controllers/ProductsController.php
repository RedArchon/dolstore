<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Image;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('published', 1)->get();

        return view('products.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create(request()->validate([
            'name' => ['required', 'min:3'],
            'description' => ['required', 'min:5'],
            'price' => ['required'],
            'published' => ['required']
        ]));
        $product->categories()->attach(request()->categories);

        $images = $request->file('image');
        foreach ($images as $key => $image) {
            if ($request->file('image')[$key]->isValid()) {
                $path = $request->image[$key]->store('products'); // from store/products
                Image::create([
                    'product_id' => $product->id,
                    'path' => $path
                ]);
            }
        }
        return redirect('/admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update(request()->validate([
            'name' => ['required', 'min:3'],
            'description' => ['required', 'min:5'],
            'price' => ['required'],
            'published' => ['required'],
            'image_uri' => ['unique:products']
        ]));
        foreach (request()->categories as $category) {
            if (!in_array($category, $product->categories()->pluck('category_id')->toArray())) {
                $product->categories()->attach($category);
            }
        }
        foreach ($product->categories()->pluck('category_id') as $id) {
            if (!in_array($id, request()->categories)) {
                $product->categories()->detach($id);
            }
        }
        return redirect('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('admin.products'));
    }

    public function admin()
    {
        $products = Product::all();
        return view('admin.products.index', [
            'products' => $products
        ]);
    }
}
