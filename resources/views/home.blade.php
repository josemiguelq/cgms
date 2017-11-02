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
                
                <img class=".img-responsive" src="images/points.png" usemap="#points">
                <map name="points">
    <area target="" alt="point1" title="point1" href="vacancy/request/1" coords="361,24,266,133" shape="rect">
    <area target="" alt="point2" title="point2" href="" coords="437,131,560,250" shape="rect">
                </map>
<!-- AIzaSyBHmcuqIhw7-0_54Lh9x-B2vWgFORgBPe8 -->
            </div>
        </div>
    </div>
</div>
@endsection
