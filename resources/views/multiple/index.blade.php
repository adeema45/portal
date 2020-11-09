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
	<th>FATHER NAME:</th>
	<th>ADDRESS:</th>
	<th>AGE:</th>
		</thead>
		<tbody>
			@foreach($data as $key => $m)
		<tr>
			<td>{{ ++$key}}</td>
<!-- 			<td>{{ $m->id}}</td>
 -->			<td>{{ $m->name}}</td>
			<td>{{ $m->fname}}</td>
			<td>{{ $m->address}}</td>
			<td>{{ $m->age}}</td>
		</tr>
		@endforeach
		</tbody>
	
</table>

</body>
</html>