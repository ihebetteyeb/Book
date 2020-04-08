<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/books';
    //protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo = RouteServiceProvider::BOOK;

    /**
     * Create a new controller instance.
     *
     * @return void

     */
    protected function redirectTo( ) {
    if (Auth::check() && Auth::user()->role == 'admin') {
        return('/admin');
    }
    elseif (Auth::check() && Auth::user()->role == 'Club') {
        return('/Club');
    }
    
}
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
}
