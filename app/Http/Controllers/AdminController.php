<?php

namespace App\Http\Controllers;

use App\Hotels;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function createhotel()
    {
    	$hotels = Hotels::all();

    	return view('admin', compact('hotels'));
    }
}
