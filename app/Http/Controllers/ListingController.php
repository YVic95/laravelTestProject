<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // Show all listings
    public function index() {
        return view('listings.index', [
            //fetch listings from the Listing Model (table)
            'listings' => Listing::latest()->filterByTagAndSearch(request(['tag', 'search']))->paginate(4)
        ]);
    }

    // Show single listing

    // Injects the Listing model instance directly into the route
    // instead of retrieving just only single listing id
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // Form for creating new listing
    public function create() {
        return view('listings.create', []);
    }

    // Store listing data
    public function store(Request $request) {
        $validatedFields = $request->validate([
            'company' => ['required', Rule::unique('listings', 'company')],
            'title' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['email:dns', 'required'],
            'tags' => 'required',
            'description' => 'required'
        ]);
        if($request->hasFile('logo')) {
            $validatedFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        // Save new record to listing table
        Listing::create($validatedFields);

        return redirect('/')->with('message', 'Listing was created successfuly!');
    }

    // Show Edit Form
    public function edit(Listing $listing) {
        //dd($listing);
        return view('listings.edit', ['listing' => $listing]);
    }
}
