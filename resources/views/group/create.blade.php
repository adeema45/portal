<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('group.store')}}" method="POST">
		{{ csrf_field()}}
<input type="text" name="title">
<input type="submit" value="save">
</form>
</body>
</html>