<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function index(Request $request )
    {
        
        $user = $request->user();
        if ($user && $user->role === 'parent') {
            
            return view('parent');
        }
        else{
            return redirect('users');
        }
    }


     /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
    public function logout()
    {        return redirect('login');
      //  return view('home');
    }

    public function login()
    {
        if (auth()->user()->role == 'parent')
        {
            return view('parent');
        }
        else
        return view('welcome');
      //  return view('home');
    }
    
}

