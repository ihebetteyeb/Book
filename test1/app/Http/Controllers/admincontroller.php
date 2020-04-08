<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use App\reservation;
use DB;
class admincontroller extends Controller
{
    public function showad(){
    	$data=DB::table('reservation','revnmt_name')->get();
    	$name=DB::table('reservation','rc_name')->get();
    	return view('admin',['data'=>$data,'name'=>$name]);
    }
}
