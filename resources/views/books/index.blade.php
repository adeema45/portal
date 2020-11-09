<!DOCTYPE html>
<html>
<head>
	<title>group</title>
</head>
<body>
	<table>
		<thead>
			<th>ID::</th>
			<th>Title</th>
		</thead>
		<tbody>
		@foreach($group as $key => $group)
		<tr>
			<td>{{ ++$key}} {{ $group->id}}</td>
			<td>{{ $group->title}}</td>
		</tr>
		@endforeach
	</tbody>
	</table>

</body>
</html>