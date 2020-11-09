<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form  action="{{ url('directory/store')}}" method="post">
	{{ csrf_field() }}
<label>business name</label>
<input type="text" name="bizname">
<label>person name</label>
<input type="text" name="contactname">
<label>adrress</label>
<input type="text" name="address">
<label>phone</label>
<input type="text" name="phone">
<input type="submit" value="save">
</form>
</body>
</html>