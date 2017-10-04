<?php

namespace App\Http\Controllers\Api;

use App\Plataform;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use \Illuminate\Http\Response;
use \Illuminate\Http\Request;

class ApiPlataformController extends Controller
{
   

    protected function index($id)
    {
        if($id == '1'){
           $plataforms = \App\Plataform::all();    
           return response()->json($plataforms);     
        }else{
            return response('Não autorizado', 401)
                  ->header('Content-Type', 'text/plain'); 
        }       
    }

    protected function unauth()
    {
        
            return response('Não autorizado', 401)
                  ->header('Content-Type', 'text/plain');        
       
    }

    
}
