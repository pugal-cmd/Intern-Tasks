<?php

namespace App\Http\Controllers;

use App\Models\Creator;
use Illuminate\Http\Request;

class CreatorController extends Controller
{
    public function index(Request $request)
    {
        $query = Creator::query();

        if ($request->filled('specialty')) {
            $query->where('specialty', $request->specialty);
        }

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $creators = $query->orderByDesc('rating')->paginate(12);
        $specialties = Creator::distinct()->pluck('specialty');

        return view('creators.index', compact('creators', 'specialties'));
    }

    public function show(Creator $creator)
    {
        return view('creators.show', compact('creator'));
    }

    public function apply()
    {
        return view('creators.apply');
    }

    public function storeApplication(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|unique:creators,email',
            'phone'     => 'required|string|max:20',
            'specialty' => 'required|string|max:100',
            'portfolio' => 'nullable|url',
            'bio'       => 'required|string|max:1000',
            'city'      => 'required|string|max:100',
        ]);

        Creator::create(array_merge($validated, [
            'status'   => 'pending',
            'featured' => false,
            'rating'   => 0,
        ]));

        return redirect()->route('home')
            ->with('success', 'Your application has been submitted! We\'ll be in touch soon.');
    }
}