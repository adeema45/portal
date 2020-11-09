<!DOCTYPE html>
<html>
<head>
	<title>Books Lis</title>
</head>
<body>

<table>
	<thead>
		<th>ID</th>
		<th>Title</th>
		<th>Author</th>
		<th>Edition</th>
		<th>Sno</th>
		<th>actions</th>
	</thead>
	<tbody>
		@foreach($books as $key => $book)
		<tr>
			<td>{{ ++$key}} {{ $book->id}}</td>
			<td>{{ $book->title}}</td>
			<td>{{ $book->author}}</td>
			<td>{{ $book->edition}}</td>
			<td>{{ $book->sno}}</td>
			<td>
				<a href="{{ route('boks.edit', $book->id)}}">Edit</a>
				<form action="{{ route('boks.destroy' , $book->id ) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button>Delete</button>
</form>

			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</body>
</html>