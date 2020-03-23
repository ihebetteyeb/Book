<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;
use auth;
use DB;

class booksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
   public function test1()
    {
        
       
     // $id = Auth::id();
         $data = DB::table('books')->where('userid',auth::user()->id)->get();
       /*   ->join('books','books.userid','=',$id)
         ->where('books.userid',$id)
         ->select('books.title')
         ->get();
         */
                
   return view('books',['data'=>$data]);
        
    }

    
    
    /*
   public function test1()
    {
        $id = Auth::id();
        $data= DB::table('users')
        ->join('books','books.userid','=','id')
        ->where('books.userid','id')
        ->select('books.title')
        ->get();
        
        
    return view('books',compact('data'));
/*
  public function test1()
    {
       $data= DB::table('users')
        ->join('books','books.userid','=','users.id')
        
        ->where('books.userid','users.id')
        ->select('books.title')
        ->get();
        
        
    return view('books',compact('data'));
    */
}
