<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('products.index', ['products' => $products]);
    }


    public function create()
    {
        return view('products/create');
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'mrp' => 'required | numeric',
            'price' => 'required | numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);
        // Upload Image
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('pictures'), $imageName);

        // Save Product
        $Product = new Product;
        $Product->name = $request->name;
        $Product->description = $request->description;
        $Product->mrp = $request->mrp;
        $Product->price = $request->price;
        $Product->image = $imageName;
        $Product->save();
        return back()->withSuccess('Product Details Added Successfully...');
    }
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', ['product' => $product]);
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', ['product' => $product]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'mrp' => 'required | numeric',
            'price' => 'required | numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);
        // Upload Image
        $product = Product::find($id);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('pictures'), $imageName);
            $product->image = $imageName;
        }
        // Save Product

        $product->name = $request->name;
        $product->description = $request->description;
        $product->mrp = $request->mrp;
        $product->price = $request->price;

        $product->save();
        return back()->withSuccess('Product Details Updated Successfully...');
    }
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return back()->withError('Product not found');
        }

        $product->delete();

        return back()->withSuccess('Product Details Deleted Successfully...');
    }
}
