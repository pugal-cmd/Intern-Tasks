<?php

namespace App\Http\Controllers;

use App\Mail\VendorRegistrationMail;
use App\Models\VendorRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class VendorRegistrationController extends Controller
{
    /**
     * Show vendor registration form (still kept for direct page access)
     */
    public function create()
    {
        return view('vendor.register');
    }

    /**
     * Store vendor registration
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'           => 'required|string|max:255',
            'email'          => 'required|email|max:255',
            'mobile'         => 'required|string|max:20',
            'business_name'  => 'required|string|max:255',
            'business_type'  => 'required|string|max:255',
            'city'           => 'required|string|max:255',
            'experience'     => 'nullable|string|max:255',
            'equipment'      => 'nullable|string|max:500',
            'specialties'    => 'nullable|string|max:1000',
            'portfolio_url'  => 'nullable|url|max:500',
            'instagram_url'  => 'nullable|string|max:500',
            'about'          => 'nullable|string|max:2000',
        ]);

        try {

            // Save to database (default status so NOT NULL columns don't break the insert)
            $vendor = VendorRegistration::create(array_merge($validated, [
                'status' => 'pending',
            ]));

        } catch (\Exception $e) {

            Log::error('Vendor Registration DB Error: ' . $e->getMessage());

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Something went wrong while saving your application. Please try again.',
                ], 500);
            }

            return back()
                ->withInput()
                ->with(
                    'error',
                    'Something went wrong while saving your application. Please try again.'
                );
        }

        // Send notification email (failure here should NOT affect the saved record or response)
        try {
            Mail::to(config('mail.from.address'))
                ->send(new VendorRegistrationMail($vendor));
        } catch (\Exception $e) {
            Log::error('Vendor Registration Mail Error: ' . $e->getMessage());
        }

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you for registering! We will review your application and contact you within 48 hours.',
            ]);
        }

        return redirect()
            ->route('vendor.register')
            ->with(
                'success',
                'Thank you for registering! We will review your application and contact you within 48 hours.'
            );
    }
}