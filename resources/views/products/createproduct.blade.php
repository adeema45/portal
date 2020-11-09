<!DOCTYPE html>
<html>
<head>
	<title>LIST OF ALL RODUCDS</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css"></style>
<body>
<h1>List of Products</h1> 
@if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif
<div class="container">
  
<form action="{{ url('products/save')}}" method="post">

{{ csrf_field() }}

	<div class="form-group">
		<label>Name:</label>
  		<input type="text" name="name"><br>
</div>
	<div class="form-group">
  <label>Brand:</label>
  <input type="text" name="brand"><br>
</div>
<div class="form-group">
  <label>Cost:</label>
  <input type="text" name="cost"><br>
</div>
  <input type="submit" value="Submit" class="btn btn-primary">
</form> 
</div>
</body>
</html>