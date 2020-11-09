<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('group.update', $group->id)}}" method="POST">
		{{ csrf_field()}}
		{{ method_field('PUT')}}
<input type="text" name="title" value="{{$group->title}}">
<input type="submit" value="save">
</form>
</body>
</html>