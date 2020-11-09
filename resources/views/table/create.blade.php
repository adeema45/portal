<!DOCTYPE html>
<html>
<head>
	<title>Table Of Students</title>
</head>
<body>
<form  action="{{ route('table.store')}}" method="post">
	{{ csrf_field() }}

<label>name</label>
<input type="text" name="name[]">
<label>class</label>
<input type="text" name="class[]">
<label>subject</label>
<input type="text" name="subject[]"><br>
<label>name</label>
<input type="text" name="name[]">
<label>class</label>
<input type="text" name="class[]">
<label>subject</label>
<input type="text" name="subject[]">
<br>
<label>name</label>
<input type="text" name="name[]">
<label>class</label>
<input type="text" name="class[]">
<label>subject</label>
<input type="text" name="subject[]"><br>

<input type="submit" value="save">
</form>
</body>
</html>