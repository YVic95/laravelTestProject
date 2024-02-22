<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show all listings
    public function index() {
        return view('listings.index', [
            //fetch listings from the Eloquent Model
            'listings' => Listing::all()
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
}
