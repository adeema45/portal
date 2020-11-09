<!DOCTYPE html>
<html>
<head>
	<title>Create new</title>
</head>
<body>
<h1>Add new book</h1>
@if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif
<form action="{{ route('boks.store')}}" method="post">
	{{ csrf_field()}}
	<input type="text" name="title">
	<input type="text" name="author">
	<input type="text" name="edition">
	<input type="text" name="sno">
	<input type="submit" value="save">
</form>
</body>
</html>