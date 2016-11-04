@extends('layouts.app')

@section('content')
    <div class="container" >
        <div class="row" >
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Servicios</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-6 col-md-3">
                                <a href="{{ url('/home') }}" class="thumbnail">
                                    <img src="img/home-bg.jpg" alt="">
                                </a>
                            </div>
                            Cirugia canina
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                    <img src="img/home-bg.jpg" alt="...">
                                </a>
                            </div>
                            ...
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

