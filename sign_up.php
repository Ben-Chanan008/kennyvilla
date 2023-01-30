<?php
$name = $email = $passcode = '';
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
			<h1 style="color: #fff">Sign Up</h1>
		</div>
		<div class="form-group">
			<label for="name">Username</label>
			<input id="name" type="text" name="name" placeholder=""/>
			<div class="msg" style="color: #ff0000; font-size:30px; font-weight:bold;"></div>
			<label for="email">Email</label>
			<input id="email" type="text" name="email"/>
			<div class="msg2" style="color: #ff0000; font-size:30px; font-weight:bold;"></div>
			<label for="password">Password</label>
			<input type="password" id="password" name="passcode"/>
			<div class="msg3" style="color: #ff0000; font-size:30px; font-weight:bold;"></div>
			<label for="confirm_password">Re-Password</label>
			<input type="password" id="confirm_password" name="passcode"/>
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
    const formGroup = document.querySelector('.my-form');
    formGroup.addEventListener('submit', validate)
    function validate(e){
		e.preventDefault();

        if(name.value === '' && email.value === '' && password.value === '') {
            msg.innerHTML = 'Please fill in field';
			msg2.innerHTML = 'Please fill in field';
			msg3.innerHTML = 'Please fill in field';
        } else{
			return;
		}
    }
</script>
</body>
</html>
