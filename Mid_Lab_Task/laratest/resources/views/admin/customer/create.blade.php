<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>

<form action="/customers" method = "POST">
    
	<fieldset>
		<legend>Cterate Customer</legend>
		<table>
        {{csrf_field()}}
			<tr>
				<td>Name</td>
				<td><input type="text" name = "name"></td>
			</tr>
			<tr>
				<td>Customer_Id</td>
				<td><input type="text" name = "customerId"></td>
			</tr>
			<tr>
				<td>Type</td>
				<td><input type="text" name = "type"></td>
			</tr>
			
			<tr>
				<td><input type="Submit" name = "submit" value = "Save"></td>
			</tr>
		</table>
	</fieldset>
	</form>
	<table border="1">
	<tr>
	<th>SL</th>
	<th>Customer Name</th>
	<th>Customer Id</th>
	<th>Customer Type</th>
	<th>Action</th>
	</tr>
	@foreach($pdt as $key=>$data)
<tr>
	<td>{{++$key}}</td>
	<td>{{$data->name}}</td>
	<td>{{$data->customerId}}</td>
	<td>{{$data->type}}</td>
	<td><a href="/costomers/{{$data->id}}/edit"> Edit</a> | <a onclick="return confirm('Are you sure delete data')" href="/customer/delete/{{$data->id}}">Delete</a></td>
</tr>
	@endforeach
	</table>
    
</body>
</html>