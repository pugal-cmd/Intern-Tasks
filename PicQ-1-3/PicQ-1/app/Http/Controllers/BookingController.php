<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Creator;
use App\Models\Service;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create(Request $request)
    {
        $services  = Service::orderBy('sort_order')->get();
        $creators  = Creator::where('status', 'active')->orderByDesc('rating')->get();
        $selectedCreator = $request->filled('creator') ? Creator::find($request->creator) : null;

        return view('booking.create', compact('services', 'creators', 'selectedCreator'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email',
            'phone'       => 'required|string|max:20',
            'service_id'  => 'required|exists:services,id',
            'creator_id'  => 'nullable|exists:creators,id',
            'location'    => 'required|string|max:255',
            'scheduled_at'=> 'required|date|after:now',
            'notes'       => 'nullable|string|max:1000',
        ]);

        $booking = Booking::create(array_merge($validated, [
            'status'     => 'pending',
            'booking_ref' => 'FSH-' . strtoupper(uniqid()),
        ]));

        return redirect()->route('booking.success')
            ->with('booking_ref', $booking->booking_ref);
    }

    public function success()
    {
        $ref = session('booking_ref', 'FSH-XXXXXXX');
        return view('booking.success', compact('ref'));
    }
}   