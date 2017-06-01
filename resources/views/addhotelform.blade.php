{{ Form::open(['url' => '/addhotel'])}}
	<div>
		{{ Form::label('name', 'Name:')}}
		{{ Form::text('name')}}
	</div>
	<div>
		{{ Form::submit('Add Hotel') }}
	</div>
{{ Form::close() }}