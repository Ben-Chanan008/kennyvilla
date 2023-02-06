<?php
	include 'session.php';
	
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$passcode = filter_input(INPUT_POST, 'passcode', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	if(isset($_POST['submit'])){
		if(empty($_POST['name']) && empty($_POST['passcode'])){
			$nameErr = $passcodeErr = 'Please fill in fields';
		} 
		// if(isset($_POST['submit'])){
		// 	if($passcode->value === $re_passcode->value);
		// }
		if(empty($nameErr) && empty($emailErr) && empty($passcodeErr)){
			$query = $conn->query("SELECT * FROM user WHERE username = '$name' AND password = '$passcode'");
			
			if($query->num_rows) {
				$user = $query->fetch_object();
				
				print_r($user);
				$_SESSION['kennyvilla'] = $user->id;
				header('Location: ./logged_in.php');
			} else{
				echo 'Error:'. mysqli_error($conn); 
			}
		}
	}
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
			<input type="submit" value="Login" name="submit">
			<div class="login">
				<p>Don't have an account? <span><a href="sign_up.html">Sign up</a></span></p>
			</div>
		</div>
	</form>
</body>
</html>
