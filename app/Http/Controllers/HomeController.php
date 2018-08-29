<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        // $request->session()->put(['Rob'=>'Learning Laravel']);
        
		// session(['rob'=>'student']);
        
        // Delete a specific session's info
//        $request->session()->forget('rob');
        
        // Delete info for all sessions
//        $request->session()->flush();
        
        // Display all session info
//        return $request->session()->all();

	// HOW TO FLASH DATA, ONLY STAYS FOR ONE REQUEST
//	$request->session()->flash('message', 'Post has been created');
	
	// return $request->session()->get('message');
	
	
	// Keep data around a little loonger
	
//	$request->session()->reflash();
	
	// or
	
//	$request->session()->keep('message');
	
        
        return view('home');
    }
}
