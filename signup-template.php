<?php require_once('config.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
</head>
<body>
	<h3>Sign Up</h3>
	<form action="<?php echo INCLUDE_DIR;?>login-process.php" method="post">
		<label for="name">Name</label>
		<input id="name" type="text" name="name"><br />
		<label for="username">Email</label>
		<input id="username" type="email" name="username"><br />
		<label for="password">Password</label>
		<input id="password" type="password" name="password"><br />
		<label for="confirm_password">Confirm Password</label>
		<input id="confirm_password" type="password" name="confirm_password"><br />
		<label for="usertype">User Type</label>
		<select name="usertype">
			<option value="blank"></option>
			<option value="issuer">Issuer</option>
			<option value="issuer_superior">Issuer Superior</option>
			<option value="concern">Concern</option>
		</select><br />
		<label for="department">Department</label>
		<input id="department" type="text" name="department"><br />
		<input type="submit" value="Submit">
	</form>
</body>
</html>
