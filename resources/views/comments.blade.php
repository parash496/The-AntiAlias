@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>{{ $id->name }}</h1></div>

                <div class="panel-body">
                    
                    <ul>
                    	@foreach ($id->comments as $comment)
                        	<li>{{ $comment->review }}</li>
                    	@endforeach

                        @if(Auth::user())
                            @include('addcommentform')
                        @else
                            <h4>Login in to comment.</h4>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@stop