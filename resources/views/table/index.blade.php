<!DOCTYPE html>
<html>
<head>
	<title>table</title>
</head>
<body>
	<table>
		<thead>
	<th>ID:</th>
	<th>NAME:</th>
	<th>CLASS:</th>
	<th>SUBJECT:</th>
		</thead>
		<tbody>
			@foreach($data as $key => $t)
		<tr>
			<td>{{ ++$key}}</td>
			<td>{{ $t->id}}</td>
			<td>{{ $t->name}}</td>
			<td>{{ $t->class}}</td>
			<td>{{ $t->subject}}</td>
		</tr>
		@endforeach
		</tbody>
	
</table>

</body>
</html>