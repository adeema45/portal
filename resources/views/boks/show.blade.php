<!DOCTYPE html>
<html>
<head>
	<title>Books Lis</title>
</head>
<body>
<table>
	
	<tbody>
			<tr>
			<td>ID: {{ $book->id}}</td><br>
			<td>Title: {{ $book->title}}</td><br>
			<td>Author: {{ $book->author}}</td><br>
			<td>Edition: {{ $book->edition}}</td><br>
			<td>Sno: {{ $book->sno}}</td><br>
		</tr>
			</tbody>
</table>
</body>
</html>