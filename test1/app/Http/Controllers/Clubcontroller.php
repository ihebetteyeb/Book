<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use App\reservation;

class Clubcontroller extends Controller
{
    public function vClub()
    {
    	return view ('Club');

    }

    public function post(Request $request)
    {
    	$reservation = new reservation;
    	$reservation->rs_id = $request->input('rs_id');
    	$reservation->rc_name = $request->input('rc_name');
    	$reservation->revnmt_name = $request->input('revnmt_name');
    	$reservation->r_phone = $request->input('r_phone');
    	$reservation->r_email = $request->input('r_email');
    	$reservation->start_date = $request->input('start_date');
    	$reservation->end_date = $request->input('end_date');
    	$reservation->save();
    return	'requested successfully';

    }
}
