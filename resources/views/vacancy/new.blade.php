
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('create_vacancy') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            {!! Form::label('client_id', 'Plataforma: ', ['class' => 'col-md-4 control-label']) !!}
							<select name="plataform_id">
							    @foreach($plataforms as $plataform)
							     <option value="{{ $plataform->id }}">{{ $plataform->name}}</option>
							    @endforeach
							</select>
                        </div>

                        <div class="form-group">
                            <label for="long" class="col-md-4 control-label">Number</label>

                            <div class="col-md-6">
                                <input id="number" type="number" class="form-control" name="number" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="status" class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                {!! Form::checkbox('status', '1', false,['id' => 'status']) !!}
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
