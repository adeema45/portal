<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" width="600px" >
		<thead>
			<th>id</th>
			<th>name</th>
			<th>address</th>
			<th>cell</th>
			<th><a href="{{ route('client.create')}}">Add New</a></th>
		</thead>
		<tbody>
			@foreach($data as $key => $c)
			<tr>
				<td>{{ ++$key}}</td>
				<td>{{ $c->name}}</td>
				<td>{{ $c->address}}</td>
				<td>{{ $c->cell}}</td>
			<td>
					<a href="{{ route('client.show', $c->id)}}">Show</a> 
					<a href="{{ route('client.edit', $c->id)}}">Edit</a> 
					<a href="{{ route('client.destroy', $c->id)}}">Delete</a> 
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>