<!DOCTYPE html>
<html>
<head>
	<title>All Books</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<body>
<form method="POST" action="{{ url('/books/update')}}">
	<div class="container">
		<div class="row">
			<div class="column-4">
				<label>title:</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="column-4">
				<label>author:</label>
				<input type="text" name="author" class="form-control">
			</div>
			<div class="column-4">
				<label>edition:</label>
				<input type="text" name="edition" class="form-control">
			</div>
			<div class="column-4">
				<label>Sno:</label>
				<input type="text" name="sno" class="form-control">
			</div>
		</div>
		
	</div>
</form>
</body>
</html>