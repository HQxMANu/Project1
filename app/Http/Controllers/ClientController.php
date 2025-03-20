<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'property_title' => 'required',
            'description' => 'required',
            'number_of_rooms' => 'required|integer',
            'number_of_bathrooms' => 'required|integer',
            'price' => 'required|numeric',
            'property_type' => 'required',
            'location' => 'required',
            'house_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('house_photo')) {
            $housePhotoPath = $request->file('house_photo')->store('house_photos', 'public');
        }

        Client::create([
            'property_title' => $request->property_title,
            'description' => $request->description,
            'number_of_rooms' => $request->number_of_rooms,
            'number_of_bathrooms' => $request->number_of_bathrooms,
            'price' => $request->price,
            'property_type' => $request->property_type,
            'location' => $request->location,
            'house_photo' => $housePhotoPath ?? null,
        ]);

        return redirect()->route('clients.create')->with('success', 'Client added successfully');
    }
    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.show', compact('client'));
    }
}

