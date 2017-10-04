<?php

namespace App\Http\Controllers;

use App\Plataform;
use Illuminate\Http\Request;

class PlataformController extends Controller
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
     * return \App\Plataform
     */
    protected function create(Request $request)
    {
    	return Plataform::create([
            'name' => $request['name'],
            'lat' => $request['lat'],           
            'long' => $request['long'],           
            'vacancy' => $request['vacancy'],           
        ]);
         
    }

    /**
     * Create a new user instance after a valid registration.
     *     
     * 
     */
    protected function index()
    {
	    return view('plataform/new');
    }
}
