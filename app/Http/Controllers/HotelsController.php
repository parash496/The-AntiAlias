<?php

namespace App\Http\Controllers;

use Redirect;

use App\Hotels;

use Request;

use App\Http\Requests;

class HotelsController extends Controller
{
    public function allhotels()
    {
    	$hotels = Hotels::all();

    	return view('welcome', compact('hotels'));
    }

    public function addhotel(Hotels $hotel)
    {
    	$input = Request::all();

    	Hotels::create([
    			'name' => $input['name']
    		]);

    	return Redirect::to('/admin');
    }
}
