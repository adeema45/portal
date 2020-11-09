<!DOCTYPE html>
<html>
<head>
	<title>List Of Multiple Students</title>
</head>
<body>
<form action="{{route('multiple.store')}}" method="POST">
	{{ csrf_field() }}
	<label>Name:</label>
	<input type="text" name="name[]"><br>
	<label>Father Name</label>
	<input type="text" name="fname[]"><br>
	<label>Address</label>
	<input type="text" name="address[]"><br>
	<label>Age</label>
	<input type="text" name="age[]"><br>
	<br>
	<label>Name:</label>
	<input type="text" name="name[]"><br>
	<label>Father Name</label>
	<input type="text" name="fname[]"><br>
	<label>Address</label>
	<input type="text" name="address[]"><br>
	<label>Age</label>
	<input type="text" name="age[]"><br>
	<br>
	<label>Name:</label>
	<input type="text" name="name[]"><br>
	<label>Father Name</label>
	<input type="text" name="fname[]"><br>
	<label>Address</label>
	<input type="text" name="address[]"><br>
	<label>Age</label>
	<input type="text" name="age[]"><br>
	<br>
	<label>Name:</label>
	<input type="text" name="name[]"><br>
	<label>Father Name</label>
	<input type="text" name="fname[]"><br>
	<label>Address</label>
	<input type="text" name="address[]"><br>
	<label>Age</label>
	<input type="text" name="age[]"><br>
	<br>
	<label>Name:</label>
	<input type="text" name="name[]"><br>
	<label>Father Name</label>
	<input type="text" name="fname[]"><br>
	<label>Address</label>
	<input type="text" name="address[]"><br>
	<label>Age</label>
	<input type="text" name="age[]"><br>
	<br><br>
	<input type="submit" value="save">
</form>
</body>
</html>