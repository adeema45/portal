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
<form action="{{ route('boks.update', $book->id)}}" method="post">
	{{ csrf_field()}}
	{{ method_field('PUT') }}
	<input type="text" name="title" value="{{ $book->title}}">
	<input type="text" name="author" value="{{ $book->author}}">
	<input type="text" name="edition" value="{{ $book->edition}}">
	<input type="text" name="sno" value="{{ $book->sno}}">
	<input type="submit" value="update">
</form>
</body>
</html>