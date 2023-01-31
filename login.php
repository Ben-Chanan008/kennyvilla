<?php
	include './database.php';
	
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$passcode = filter_input(INPUT_POST, 'passcode', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
		<div>
			<h1 style="color: #fff">Login</h1>
		</div>
		<div class="form-group">
			<label for="name">Username</label>
			<input id="name" type="text" name="name"/>
			<label for="password">Password</label>
			<input type="password" id="password" name="passcode"/>
			<input type="submit" value="Login">
			<div class="login">
				<p>Don't have an account? <span><a href="sign_up.html">Sign up</a></span></p>
			</div>
		</div>
	</form>
</body>
</html>
