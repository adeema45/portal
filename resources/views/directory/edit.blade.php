<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form  action="{{ url('directory/update', $data->id)}}" method="post">
	{{ csrf_field() }}
<label>business name</label>
<input type="text" name="bizname" value="{{ $data->bizname}}">
<label>contact name</label>
<input type="text" name="contactname" value="{{ $data->contactname}}">
<label>adrress</label>
<input type="text" name="address" value="{{ $data->address}}">
<label>phone</label>
<input type="text" name="phone" value="{{ $data->phone}}">
<input type="submit" value="update reco">
</form>
</body>
</html>