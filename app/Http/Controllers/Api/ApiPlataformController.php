<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use \Illuminate\Http\Response;
use \Illuminate\Http\Request;

class ApiPlataformController extends Controller
{
   
    protected function index(Request $request)
    {
        if($id == '1'){
           $users = \App\User::all();    
           return response()->json($users);     
        }else{
            return response('Não autorizado', 401)
                  ->header('Content-Type', 'text/plain'); 
        }
       
    }

    
}
