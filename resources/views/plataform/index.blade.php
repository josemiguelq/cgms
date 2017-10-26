@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('create_plataform') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" >                               
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lat" class="col-md-4 control-label">Latitude</label>

                            <div class="col-md-6">
                                <input id="lat" type="text" class="form-control" name="lat" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="long" class="col-md-4 control-label">Longitude</label>

                            <div class="col-md-6">
                                <input id="long" type="text" class="form-control" name="long" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="vacancy" class="col-md-4 control-label">Vagas</label>

                            <div class="col-md-6">
                                <input id="vacancy" type="text" class="form-control" name="vacancy" required>
                            </div>
                        </div>          

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Salvar
                                </button>                              
                            </div>
                        </div>                                      
                    </form>

{{ $plataforms }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
