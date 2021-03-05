<fieldset>
        <form method="post">
            @csrf
            <table>
				<tr>
					<td>id: </td>
					<td><input type="text" name="id" value="{{ $product['id'] }}" readonly></td>
				</tr>
                <tr>
					<td>Product Name: </td>
					<td><input type="text" name="product_name" value="{{ $product['product_name'] }}" ></td>
				</tr>
                <tr>
					<td>Category: </td>
					<td><input type="text" name="category" value="{{ $product['category'] }}" ></td>
					<td>
						<select name='category'>
							<option value="medical" @if($product['category'] == 'medical') selected @endif> Medical </option>
							<option value="stationary" @if($product['category'] == 'stationary') selected @endif> Stationary </option>
							<option value="grocery" @if($product['category'] == 'grocery') selected @endif> Grocery </option>
						</select>
					</td>
				</tr>
                <tr>
					<td>Quantity: </td>