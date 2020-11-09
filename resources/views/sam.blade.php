<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
</head>
<body>
	<form method="get" action="{{ url('sam')}}">
	<h1>{{$myname}}</h1>
 <table class="table">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
</table>
<table class="table">
	<thead>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>email</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>ali</td>
			<td>aaa@gmal.com</td>
		</tr>
	</tbody>
</table>

<div class="container-fluid ">
  <h1>My First Bootstrap Page</h1>
  <p>This is some text.</p>
</div>
<div class="container pt-6my-3 bg-primary">
  <div class="row">
    <div class="col-sm-12">
      <h3>Column 1</h3>
      <p class="text-success">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
</div>
</div>
    <div class="container">
  <div class="row">
    <div class="col-sm-6">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
</div>
</div>
<button class="btn btn-primary">Success</button>
<button class="btn btn-danger">Info</button>
</form>
<script type="text/javascript" src="{{ asset('js/app.js')}}"></script>
</body>
</html>