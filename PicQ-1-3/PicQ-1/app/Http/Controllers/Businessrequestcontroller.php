<?php

namespace App\Http\Controllers;

use App\Models\BusinessRequest;
use Illuminate\Http\Request;

class BusinessRequestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:20',
            'services_required' => 'required|string|max:255',
            'preferred_services' => 'nullable|array',
            'budget' => 'required|string|max:255',
            'notes' => 'nullable|string',
        ]);

        if (isset($validated['preferred_services'])) {
            $validated['preferred_services'] = implode(', ', $validated['preferred_services']);
        }

        BusinessRequest::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Thank you! Your business request has been submitted successfully.',
        ]);
    }
}