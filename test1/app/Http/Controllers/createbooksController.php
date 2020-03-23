<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use auth;
use App\books;

class createbooksController extends Controller
{
    public function create()
    {


    	return view ('createbooks');
    }

    public function store(Request $request)
    {
    	$books= new books;
    	$books->title = $request->input('title');
    	$books->author = $request->input('author');
    	$books->numberofpages =$request->input('numberofpages');
    	$books->userid = auth::user()->id;
    /*	$title= $request->title;
    	books::create(['title' =>$title]);*/
    	$books->save();
    	return 'added successfully';
    }
}
