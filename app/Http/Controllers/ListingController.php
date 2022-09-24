<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //Show all listings
    public function index() {

        return view('listings.index',  [
       
            'listings' => Listing::all()
        
                                              
     ]);

    }

    //Show one listing
    public function show(Listing $listing) {

           
        return view('listings.show', [
            'listing' => $listing
        ]);

    }
}