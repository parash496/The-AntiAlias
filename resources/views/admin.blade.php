@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h1> All Hotels </h1></div>

                <div class="panel-body">
                
                    @foreach ($hotels as $hotel)
                        <a href="/{{ $hotel->id }}"><li>{{ $hotel['name'] }}</li></a>
                    @endforeach
                    @if(isset(Auth::user()->id)&&Auth::user()->id=='1')
                        <h3>Add Hotel</h3>
                        @include('addhotelform')
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>

@stop
    