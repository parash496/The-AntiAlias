{{ Form::open(['url' => '/addcomment'])}}
	
		{{ Form::hidden('hotel_id', $id->id) }}
	<div>
		{{ Form::label('review', 'Comment:')}}
		{{ Form::text('review')}}
	</div>
	<div>
		{{ Form::submit('Post') }}
	</div>
{{ Form::close() }}