@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h1> All Hotels </h1></div>

                <div class="panel-body">
                
                    @foreach ($hotels as $hotel)
                        <a href="/{{ $hotel->id }}"><li>{{ $hotel['name'] }}</li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@stop
