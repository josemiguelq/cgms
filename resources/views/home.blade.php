@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bem vindo de volta!
                    Escolha no mapa o ponto onde vai retirar a bicicleta.
                </div>
                <img src="images/maps.png">
<!-- AIzaSyBHmcuqIhw7-0_54Lh9x-B2vWgFORgBPe8 -->
            </div>
        </div>
    </div>
</div>
@endsection
