<?php
include 'session.php';

if (!$user)
	echo '<meta http-equiv="refresh" content="0; login.php">';

$allowed_ext = ['png', 'jpeg', 'jpg'];
if (isset($_POST['submit'])) {
	if (!empty($_FILES['upload']['name'])) {
		$file_name = $_FILES['upload']['name'];
		$file_dir = "pics/${file_name}";
		$file_size = $_FILES['upload']['size'];
		$file_tmp = $_FILES['upload']['tmp_name'];
		
		$file_ext = explode('.', $file_name);
		$file_ext = strtolower(end($file_ext));
		if (in_array($file_ext, $allowed_ext)) {
			if ($file_size >= 2000000) {
				$message = '<p style="color:red;">File too big choose file under 2MB</p>';
			} else {
				move_uploaded_file($file_tmp, $file_dir);
				$message = '<p style="color:green;">File upload successfully</p>';
			}
		} else {
			$message = '<p style="color:red;">Invalid file type</p>';
		}
	} else {
		$message = '<p style="color:red;">Please choose a file</p>';
	}
	echo $message;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Your Profile</title>
	<link rel="stylesheet" href="./BOOSTRAP V5.30/bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
	<link rel="stylesheet" href="./css/all.css">
	<link rel="stylesheet" href="./extra.css">
</head>
<body>
	<header>
		<div class="pic p-5">
			<i class="fa-solid fa-camera-circle fa-5x"></i>
			<h2>Upload pic</h2>
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
				<input type="file" class="mb-2" name="upload"/>
				<input type="submit" value="Upload pic" name="submit">
			</form>
		</div>
		<div class="m-2 fs-1">
			<span><?php echo $user->username; ?></span>
		</div>
	</header>
	<div class="d-flex double">
		<span class="fs-1 mx-auto p-2"><i class="fa-solid fa-pen mx-2"></i>Edit Profile</span>
	</div>
	<div>
		<h2 class="p-3">About us</h2>
		<p class="lead text-secondary p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum reiciendis tempora minima cupiditate odio iure quo dolore itaque fugit facere illo deserunt nulla aliquam, iusto eius molestias esse? Asperiores, deserunt!</p>
	</div>
</body>
</html>
