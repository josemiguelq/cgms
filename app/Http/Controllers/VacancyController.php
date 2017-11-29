<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacancy;

class VacancyController extends Controller
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
        if(!isset($request['status'])){
            $request['status'] = '0';
        }
    	return Vacancy::create([
            'number' => $request['number'],            
            'plataform_id' => $request['plataform_id'],                                          
            'status' => $request['status'],
        ]);
         
    }

    /**
     * Create a new user instance after a valid registration.
     *     
     * 
     */
    protected function index()
    {
         $plataforms = \App\Plataform::all();                
	    return view('vacancy/new')->with('plataforms', $plataforms);
    }


     /**
     * Create a new user instance after a valid registration.
     *     
     * 
     */
    protected function request($id)
    {
        $vacancies = \App\Vacancy::where('plataform_id', $id)->get();    
        return view('vacancy/request')->with('vacancies', $vacancies);
    }

    
     /**
     * Update the specified resource in storage.
     *
     * @param  Int  $id
     * @return Response
     */
    public function update($id)
    {
            $vacancy = vacancy::find($id);
            $vacancy->status = 1;            
            $vacancy->save();
            
            return $vacancy;
    }
    

}
