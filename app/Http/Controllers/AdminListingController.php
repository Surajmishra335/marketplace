<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdminListingController extends Controller
{
    public function index()
    {
        $ads = Advertisement::latest()->paginate(20);
        return view('backend.listing.index', compact('ads'));
    }
}
