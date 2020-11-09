<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	@if(empty($data))
	<p>Data does not exist</p>
@else
	<table border="1" width="600px" >
		<thead>
			<th>id</th>
			<th>Biz name</th>
			<th>Contact person</th>
			<th>address</th>
			<th>phone</th>
			<th><a href="{{ url('directory/create')}}">Add New</a></th>
		</thead>
		<tbody>
			@foreach($data as $key => $bd)
			<tr>
				<td>{{ ++$key}}</td>
				<td>{{ $bd->bizname}}</td>
				<td>{{ $bd->contactname}}</td>
				<td>{{ $bd->address}}</td>
				<td>{{ $bd->phone}}</td>
				<td>
		<a href="{{ url('directory/show', $bd->id)}}">Show</a> 
		<a href="{{ url('directory/edit', $bd->id)}}">Edit</a> 
		<a href="{{ url('directory/dele', $bd->id)}}">Trash</a> 
			</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	@endif
	@if(empty($deleted))
	<p>recored not found</p>
	@else
	Deleted records
<table border="1" width="60%">
	<tbody>
		@foreach($deleted as $key => $db)
		<tr>
			<td>{{ ++$key}}</td>
			<td>{{ $db->bizname}}</td>
			<td>{{ $db->contactname}}</td>
			<td>{{ $db->address}}</td>
			<td>
			<a href="{{url('directory/restore',$db->id)}}"> Restore</a>
				<a href="{{url('directory/pdel',$db->id)}}"> Permenent Delete</a>
		</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endif
</body>
</html>