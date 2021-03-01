<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>
<a href="/customers/create"> Add Customer</a>
<tr>
	<table border="1">
	<tr>
	<th>SL</th>
	<th>Customer Name</th>
	<th>Customer Id</th>
	<th>Customer Type</th>
	<th>Action</th>
	</tr>
	@foreach($cms as $key=>$data)
<tr>
	<td>{{++$key}}</td>
	<td>{{$data->name}}</td>
	<td>{{$data->productId}}</td>
	<td>{{$data->type}}</td>
	<td><a href="/customers/{{$data->id}}/edit"> Edit</a> | <a onclick="return confirm('Are you sure delete data')" href="/customer/delete/{{$data->id}}">Delete</a></td>
</tr>
	@endforeach
	</table>
    
</body>
</html>