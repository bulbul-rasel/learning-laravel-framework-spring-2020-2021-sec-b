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
				</tr>
                <tr>
					<td>Quantity: </td>
					<td><input type="text" name="quantity" value="{{ $product['quantity'] }}" ></td>
				</tr>
                <tr>
					<td>Unit Price: </td>
					<td><input type="text" name="unit_price" value="{{ $product['unit_price'] }}" ></td>
				</tr>
                <tr>
					<td>Status: </td>
                    <td><input type="text" name="status" value="{{ $product['status'] }}" ></td>					    
                    <td> 
						<select name='status'>
							<option value="available"> Available </option>
							<option value="upcomming" > Upcomming </option>
						</select>	
					</td>					    
				</tr>
                <tr>
                <tr>
				</table>