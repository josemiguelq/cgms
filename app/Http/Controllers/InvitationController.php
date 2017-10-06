<?php

namespace App\Http\Controllers;

use App\Invitation;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
	/**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new user instance after a valid registration.
     *     
     * return \App\Invitation
     */
    protected function create(Request $request)
    {
    	Invitation::create([
            'name' => $request['name'],
            'email' => $request['email'],           
            'phone' => $request['phone'],           
        ]);
        return redirect()->route('landing_page');
    }

    protected function index()
    {
       $users = \App\Invitation::all();    
           return response()->json($users);     
    }
}
