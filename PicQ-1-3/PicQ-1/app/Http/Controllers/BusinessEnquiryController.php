<?php

namespace App\Http\Controllers;

use App\Models\BusinessEnquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BusinessEnquiryMail;

class BusinessEnquiryController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:20',
            'services_required' => 'required|string',
            'budget' => 'required|string|max:100',
            'notes' => 'nullable|string'
        ]);

        $enquiry = BusinessEnquiry::create($validatedData);

        // Send email
        try {
            Mail::to($validatedData['email'])->send(new BusinessEnquiryMail($enquiry));
        } catch (\Exception $e) {
            // Log error but don't fail the request
            \Log::error('Failed to send business enquiry email: ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Thank you! Your enquiry has been submitted successfully. We\'ll get back to you soon.'
        ]);
    }
}