<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Mail\ProductDetailsMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        $products = Product::all();
        return view('users.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'product_id' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'product_id' => $request->product_id,
        ]);

        $product = Product::find($request->product_id);

        Mail::to($user->email)
            ->send(new ProductDetailsMail($user, $product));

        return redirect()->route('users.index')
            ->with('success', 'User saved and mail sent successfully!');
    }

    public function index()
    {
        $users = User::with('product')->latest()->paginate(5);

        return view('users.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $products = Product::all();

        return view('users.edit', compact('user', 'products'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'product_id' => $request->product_id,
        ]);

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully!');
    }
}
