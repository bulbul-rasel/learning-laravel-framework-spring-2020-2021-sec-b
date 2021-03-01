<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>

<a href="/products/create">View Product</a>

<form action="/products/{{$data->id}}" method = "POST">
    
	<fieldset>
		<legend>Cterate Product</legend>
		<table>
        {{csrf_field()}}
			<tr>
				<td>Name</td>
				<td><input type="text" name = "name" value = "{{$data->name}}"></td>
			</tr>
			<tr>
				<td>Product_Id</td>
				<td><input type="text" name = "productId" value = "{{$data->productId}}"></td>
			</tr>
			<tr>
				<td>Type</td>
				<td><input type="text" name = "type" value = "{{$data->type}}"></td>
			</tr>
			
			<tr>
				<td><input type="Submit"  value = "Update"></td>
			</tr>
		</table>
	</fieldset>
	</form>
</body>
</html>