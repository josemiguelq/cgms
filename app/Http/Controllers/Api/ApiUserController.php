<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class ApiUserController extends Controller
{
   
   
   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    protected function index()
    {
       $users = \App\User::all();    
            return response()->json($users);
    }
}
