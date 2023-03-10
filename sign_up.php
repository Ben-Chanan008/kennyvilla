<?php
include 'session.php';

$nameErr = $emailErr = $passcodeErr = $loginErr = '';


$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$passcode = filter_input(INPUT_POST, 'passcode', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$re_passcode = filter_input(INPUT_POST, 'repasscode', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//$sql = "INSERT INTO user(username, password, email) VALUES('$name', '$passcode', '$email')";
if (isset($_POST['submit'])) {
	if (empty($_POST['name']) && empty($_POST['email']) && empty($_POST['passcode'])) {
		$nameErr = $emailErr = $passcodeErr = 'Please fill in fields';
	} elseif (!empty($_POST['name']) && !empty($_POST['email']) && empty($_POST['passcode'])) {
		$passcodeErr = 'Please fill in field';
	} elseif (empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['passcode'])) {
		$nameErr = 'PLease fill in field';
	} elseif (!empty($_POST['name']) && empty($_POST['email']) && !empty($_POST['passcode'])) {
		$emailErr = 'Please fill the field';
	}
	// if(isset($_POST['submit'])){
	// 	if($passcode->value === $re_passcode->value);
	// }
	if (empty($nameErr) && empty($emailErr) && empty($passcodeErr)) {
		$sql = "INSERT INTO user(username, password, email) VALUES('$name', '$passcode', '$email')";
		if (mysqli_query($conn, $sql)) {
			header('Location: ./logged_in.php');
		} else {
			$loginErr = 'Incorrect name or password';
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="./BOOSTRAP V5.30/bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./style.css">
	<link rel=" stylesheet" href="login.css">
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="my-form">
		<div>
			<h1 style="color: #fff; font-size:30px;">Sign Up</h1>
		</div>
		<div class="form-group">
			<label for="name">Username</label>
			<input id="name" type="text" name="name" placeholder=""/>
			<div class="msg" style="color: #ff0000; font-weight:bold;"><?= $nameErr; ?></div>
			<label for="email">Email</label>
			<input id="email" type="text" name="email"/>
			<div class="msg2" style="color: #ff0000;  font-weight:bold;"><?= $emailErr; ?></div>
			<label for="password">Password</label>
			<input type="password" id="password" name="passcode"/>
			<div class="msg3" style="color: #ff0000; font-weight:bold;"><?= $passcodeErr; ?></div>
			<label for="confirm_password">Re-Password</label>
			<input type="password" id="confirm_password" name="repasscode"/>
			<div class="msg4" style="color: #ff0000; font-weight:bold;"></div>
			<input type="submit" value="Sign Up" name="submit">
			<div class="login">
				<p>Already have an account? <span><a href="login.php">Log in</a></span></p>
			</div>
		</div>
	</form>
	<script>
		const name = document.querySelector('#name');
		const password = document.querySelector('#password');
		const email = document.querySelector('#email');
		const rePassword = document.querySelector('#confirm_password');
		const msg = document.querySelector('.msg');
		const msg2 = document.querySelector('.msg2');
		const msg3 = document.querySelector('.msg3');
		const msg4 = document.querySelector('.msg4');
		const formGroup = document.querySelector('.my-form');
		formGroup.addEventListener('submit', validate)
		
		function validate(e) {
			e.preventDefault();
			
			if (name.value === '' && email.value === '' && password.value === '') {
				msg.innerHTML = 'Please fill in field';
				msg2.innerHTML = 'Please fill in field';
				msg3.innerHTML = 'Please fill in field';
			} else if (name.value !== '' && email.value !== '' && password.value === '') {
				msg3.innerHTML = 'Please fill in field with maximum of 16';
			} else if (name.value === '' && email.value !== '' && password.value !== '') {
				msg.innerHTML = 'Please fill in field';
			}
			
			if (name.value !== '' && email.value !== '' && password.value !== '') {
				if (rePassword.value.length !== password.value.length) {
					msg4.innerHTML = 'Passwords do not match';
				} else {
					msg4.classList.add('extra');
					msg4.innerHTML = 'Passwords match;
				}
			}
		}
	</script>
</body>
</html>
