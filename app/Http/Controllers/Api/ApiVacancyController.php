<?php

namespace App\Http\Controllers\Api;

use App\Vacancy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use \Illuminate\Http\Response;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ApiVacancyController extends Controller
{
   /**
     * Update the specified user.
     *
     * @param  Request  $request
     * @param  int  $plataform_id
     * @return Response
     */   

    protected function index(Request $request)
    {
      //implementar hash identificador dos pontos
      //retorna as vagas disponiveis do ponto
      if(isset($request)){
        if($request['id']=='1'){
           $vacancies = \App\Vacancy::where('plataform_id', 1)->get();    
           return response()->json($vacancies);     
        }else{
            return response('Não autorizado', 401)
                  ->header('Content-Type', 'application/json'); 
        } 
        }      
    }

     /**
     * Update the specified vacancy.
     *
     * @param  Request  $request
     * @param  String  $plataform_id
     * @return Response
     */   

    protected function updateVacancy(Request $request)
    {
      //implementar hash identificador dos pontos

    $vacancy = Vacancy::where('plataform_id',$request['plataform_id'])->first();

    $this->validate($request, [
        'plataform_id' => 'required',
        'status' => 'required',
        'number' => 'required'
    ]);    
    
    $vacancy->status = $request->status;
    $vacancy->save();

    response()->json($vacancy);     

      // if(isset($request)){        
      //   return DB::table('vacancies')
      //       ->where('plataform_id', 1)->where('number',$request['number'])
      //       ->update(array('status' => $request['status']));

      //      // response()->json($vacancy);     
        
      //   }      
    }

    

    protected function unauth()
    {
        
            return response('Não autorizado', 401)
                  ->header('Content-Type', 'application/json');        
       
    }

    
}
