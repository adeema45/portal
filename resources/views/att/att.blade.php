@foreach($data as $d)
	@foreach($d->attendence as $att)
	{{$d->name}}
	{{$att->sum('status')}}<br>
	@endforeach
@endforeach