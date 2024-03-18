<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show all Listing
    public function index() {
        return view('listings.index',[
            'listings' => Listing::all()
        ]);
    }

    // Show single Listing
    public function show(Listing $listing) {
        return view('listings.show',[
            'listings' => $listing
        ]);
    }
}
