<!DOCTYPE html>
<html>
<head>
	<title>LIST OF ALL RODUCDS</title>
</head>
<body>
	<form action="/search" method="GET" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search users"> <span class="input-group-btn">
            	<input type="text" class="form-control" name="cost"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                search
            </button>
        </span>
    </div>
</form>
	@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<h1>List of Products</h1>
<table border="1" width="600px" background-color="#fff">
	<thead >
		<th>Id</th>
		<th>Name</th>
		<th>brand</th>
		<th>cost</th>
		<th><a href="{{ url('products/new')}}">Create new</a></th>
	</thead>
	<tbody>
		@foreach($data as $key => $product)
		<tr>
			<td>{{ ++$key}}</td>
			<td>{{ $product->name}}</td>
			<td>{{ $product->brand}}</td>
			<td>{{ $product->cost}}</td>
			<td>
			<a href="{{url('products/show',$product->id)}}"> show</a>
			<a href="{{url('products/edit',$product->id)}}"> edit</a>
			<a href="{{url('products/removerow',$product->id)}}"> Trash</a>
				
		</td>
		</tr>
		@endforeach
	</tbody>
</table>
Deleted records
<table border="1" width="60%">
	<tbody>
		@foreach($deleted as $key => $product)
		<tr>
			<td>{{ ++$key}}</td>
			<td>{{ $product->name}}</td>
			<td>{{ $product->brand}}</td>
			<td>{{ $product->cost}}</td>
			<td>
			<a href="{{url('products/restore',$product->id)}}"> Restore</a>
				<a href="{{url('products/del',$product->id)}}"> Permenent Delete</a>
		</td>
		</tr>
		@endforeach
	</tbody>
</table>
</body>
</html>