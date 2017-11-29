
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('create_vacancy') }}">
                        <table class="table">
                            <thead>
                                <th>Vaga</th>
                                <th>Reservar</th>
                            </thead>
                            <tbody>
                                @foreach ($vacancies as $vacancy)
                                @if ($vacancy->status == 1)
                                <tr class="bg-danger">
                                <td >{{ $vacancy->number }}</td>
                                <td>Indisponivel</td>    
                                </tr>    
                                @else
                                <tr>
                                <td>{{ $vacancy->number }}</td>
                                <td><a href="{{ route('update_vacancy',$vacancy) }}" class="btn btn-sm btn-primary">Reservar</a></td>    
                                </tr>                                    

                                @endif    
                                @endforeach    
                                
                            </tbody>                            
                        </table>
                        
                        
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Salvar
                                </button>                              
                            </div>
                        </div>                                      
                                                                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
