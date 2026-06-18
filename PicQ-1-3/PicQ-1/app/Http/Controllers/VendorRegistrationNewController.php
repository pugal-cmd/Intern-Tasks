<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VendorRegistrationNew;

class VendorRegistrationNewController extends Controller
{
    public function create()
    {
        return view('vendor.registration');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'studio_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'services_provided' => 'required|string',
            'price' => 'required|numeric|min:0',
            'experience' => 'required|string',
            'portfolio_links' => 'nullable|string',
            'equipment_details' => 'nullable|array',
            'additional_details' => 'nullable|string',
        ]);

        VendorRegistrationNew::create([
            'full_name' => $validated['full_name'],
            'studio_name' => $validated['studio_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'services_provided' => $validated['services_provided'],
            'price' => $validated['price'],
            'experience' => $validated['experience'],
            'portfolio_links' => $validated['portfolio_links'] ?? null,
            'equipment_details' => $validated['equipment_details'] ?? [],
            'additional_details' => $validated['additional_details'] ?? null,
            'step' => 4,
            'completed' => true,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Your application has been submitted successfully!',
        ]);
    }

    public function index()
    {
        $vendors = VendorRegistrationNew::latest()->get();
        return view('vendor.list', compact('vendors'));
    }
}