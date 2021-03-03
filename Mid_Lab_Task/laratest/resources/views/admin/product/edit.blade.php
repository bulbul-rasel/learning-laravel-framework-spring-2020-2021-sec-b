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
        <form>
            <table>
				<tr>
					<td>id: </td>
					<td><input type="text" name="id" value="{{ $product('id') }}" readonly></td>
				</tr>
                <tr>
					<td>Product Name: </td>
					<td><input type="text" name="product_name" value="{{ $product('product_name') }}" ></td>
				</tr>
                <tr>
					<td>Category: </td>
					<td><input type="text" name="category" value="{{ $product('category') }}" ></td>
				</tr>
                <tr>
					<td>Quantity: </td>
					<td><input type="text" name="quantity" value="{{ $product('quantity') }}" ></td>
				</tr>
                <tr>
					<td>Unit Price: </td>
					<td><input type="text" name="unit_price" value="{{ $product('unit_price') }}" ></td>
				</tr>
                <tr>
					<td>Status: </td>
					<td><input type="text" name="status" value="{{ $product('status') }}" ></td>
				</tr>
			</table>

        </form>
    </fieldset
</form>
</body>
</html>