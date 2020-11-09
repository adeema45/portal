@foreach($sections as $sec)
	{{ $sec->name}}<br>
	{{ $sec->teacher_id}} {{ $sec->staff->name}}

	@if($sec->teacher_id == '1')
			Male
	@elseif($sec->teacher_id == '3')

			Female

			@else
			Not exist
	@endif
	<br>
@endforeach