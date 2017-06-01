<?php

namespace App\Http\Controllers;

use Redirect;

use App\Hotels;

use Auth;

use App\Comments;

use Illuminate\Http\Request;

use App\Http\Requests;

class CommentsController extends Controller
{
    public function hotelcomment(Hotels $id)
    {
    	return view('comments', compact('id'));
    }

    public function addcomment(Request $request, Comments $comment)
    {
    	$input = $request->all();
    	
    	Comments::create([
    			'user_id' => Auth::user()->id,
    			'hotels_id' => $input['hotel_id'],
    			'review' => $input['review']
    		]);
    	
    	return Redirect::to('/'.$input['hotel_id']);
    }
}
