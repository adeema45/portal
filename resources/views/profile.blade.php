<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	{{ $data->name }}

	@if(empty($data->profile->user_id))
    <p>Data does not exist</p>
	@else
    <p>{{ $data->profile->fullname}}</p>
	@endif
</body>
</html>