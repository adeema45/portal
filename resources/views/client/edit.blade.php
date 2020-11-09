<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{ route('client.store')}}" method="POST">
		{{ csrf_field()}}
		{{ method_field('PUT')}}
<input type="text" name="name">
<input type="text" value="address">
<input type="text" value="cell">
<input type="submit" value="save">
</form>
</body>
</html>