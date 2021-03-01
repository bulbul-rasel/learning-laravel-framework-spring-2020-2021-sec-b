<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>

<h1>User Id, {{$user['id']}}  </h1>

<form method = "POST">
	<fieldset>
		<legend>Edit Users</legend>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name = "username" value = "Bulbul"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name = "password" value = "123"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name = "email" value = "bulbul@gmail.com"></td>
			</tr>
			
			<tr>
				<td><input type="Submit" name = "submit" value = "Update"></td>
			</tr>
		</table>
	</fieldset>
	</form>
    
</body>
</html>