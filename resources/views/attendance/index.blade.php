<!DOCTYPE html>
<html>
<head>
	<title>Attendance</title>
</head>
<body>
	<table border="1px">
		<thead>
	<th>ID:</th>
	<th>STUDENT ID:</th>
	<th>CLASS ID:</th>
	<th>SECTION ID:</th>
	<th>DATE:</th>
	<th>STATUS:</th>
		</thead>
		<tbody>
			@foreach($data as $at)
		<tr>
			<td>{{ $at->id}}</td>
			<td>{{ $at->students->name}}</td>
			<td>{{ $at->iclass->name}}</td>
			<td>{{ $at->isection->name}}</td>
			<td>{{ $at->date}}</td>
			<td>{{ $at->status}}</td>
		</tr>
		@endforeach
		</tbody>
	
</table>

</body>
</html>