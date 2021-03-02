<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Here</title>
</head>
<body>

<form action="/customers" method = "POST">
    
	<fieldset>
		<legend>Registration</legend>
		<table>
        {{csrf_field()}}
			<tr>
				<td>Full Name</td>
				<td><input type="text" name = "fname"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name = "uname"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name = "email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name = "pass"></td>
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td><input type="password" name = "cpass"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name = "address"></td>
			</tr>
			<tr>
				<td>Companey name</td>
				<td><input type="text" name = "cname"></td>
			</tr>
			<tr>
				<td>Phone Number</td>
				<td><input type="text" name = "phn"></td>
			</tr>
			<tr>
				<td>City</td>
				<td><input type="text" name = "city"></td>
			</tr>
			<tr>
				<td>Country</td>
				<td><input type="text" name = "country"></td>
			</tr>
			
			<tr>
				<td><input type="Submit" name = "submit" value = "Save"></td>
			</tr>
		</table>
	</fieldset>
	</form>
	 
</body>
</html>