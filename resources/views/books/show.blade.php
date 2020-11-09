<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<table class="table">
	<thead>
		<th>
			id
		</th>
		<th>title</th>
		<th>author</th>
		<th>edition</th>
		<th>sno</th>
		<th>actions</th>
	</thead>
	<tbody>
		@foreach($data as $key => $book)
		<tr>
			<td>{{++$key}}</td>
			<td>{{$book->title}}</td>
			<td>{{$book->author}}</td>
			<td>{{$book->edition}}</td>
			<td>{{$book->sno}}</td> 
	<td>
		<a href="{{url('books/edit',$book->id)}}">edit</a> /
		<a href="{{url('books/del',$book->id)}}">delete</a>
		<a href="{{url('books/trash',$book->id)}}">trash</a>
	</td>
			</tr>
		@endforeach
	</tbody>
</table>
</body>
</html>