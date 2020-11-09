<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
<form action="{{ route('multiple.update', $data->id)}}" method="POST">

	{{ csrf_field() }}

<label>NAME:</label>
<input type="text" name="name">
<label>FATHER NAME:</label>
<input type="text" name="fname">
<label>ADDREASS:</label>
<input type="text" name="address">
<label>AGE:</label>
<input type="text" name="age">
<input type="submit" value="save">
</form>
</body>
</html>