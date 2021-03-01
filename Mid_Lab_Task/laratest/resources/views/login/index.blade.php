<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>

	<h1>Login Page..!</h1>

	<form method = "POST">
	<fieldset>
		<legend>Login here</legend>
		<table>
			<tr>
				<td>Useremail</td>
				<td><input type="text" name = "useremail"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name = "password"></td>
			</tr>
			<tr>
				<td><input type="Submit" name = "submit" value = "Submit"></td>
			</tr>
		</table>
	</fieldset>
	</form>
{{session('msg')}}
</body>
</html>