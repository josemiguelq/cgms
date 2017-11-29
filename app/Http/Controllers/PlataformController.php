<?php

namespace App\Http\Controllers;

use App\Plataform;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class PlataformController extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

   protected function index()
    {
      //implementar hash identificador dos pontos        
           $plataforms = \App\Plataform::all();    
           return view('plataform/index')->with ('plataforms',$plataforms);
    }
    /**
     * Create a new plataform instance after a valid registration.
     *     
     * return \App\Plataform
     */
    protected function create(Request $request)
    {

        $plataform = $this->validate(request(),[
            'name' => 'required',
            'lat' => 'required',
            'long' => 'required',
            'vacancy' => 'required|integer',
        ]);

    Plataform::create($plataform);
    
    return $plataform;    

    	// return Plataform::create([
     //        'name' => $request['name'],
     //        'lat' => $request['lat'],           
     //        'long' => $request['long'],           
     //        'vacancy' => $request['vacancy'],           
     //    ]);
         
    }

    /**
     * Create a new user instance after a valid registration.
     *     
     * 
     */
    protected function new()
    {
	    return view('plataform/new');
    }
}
