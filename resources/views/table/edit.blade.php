<!DOCTYPE html>
<html>
<head>
	<title>Table Of Students</title>
</head>
<body>
	<div class="container">
<form action="{{ route('table.update', $data->id)}}" method="post">
<!-- <form  action="{{ url('table.update')}}" method="post">
 -->	{{ csrf_field() }}
<label>ID:</label>
<input type="text" name="id">
<label>name:</label>
<input type="text" name="name">
<label>class:</label>
<input type="text" name="class">
<label>subject:</label>
<input type="text" name="subject">
<input type="submit" value="save">
</form>
</body>
</html>