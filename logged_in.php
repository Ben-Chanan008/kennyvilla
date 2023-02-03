<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to Kenny villa</title>
	<link rel="stylesheet" href="./loggedin.css">
	<link rel="stylesheet" href="./css/all.css">
</head>
<body>
	<header>
		<div>
			<h6>Current Location</h6>
			<p>
				<i class="fa-sharp fa-solid fa-location-dot"></i>
				PortHarcourt, Rivers State
			</p>
		</div>
		<div>
			<i class="fas fa-bell"></i>
		</div>
	</header>
	<section class="searched">
		<i class="fas fa-magnifying-glass"></i>
		<input type="search" name="search" id="search" placeholder="Search"/>
		<i class="fa-sharp fa-solid fa-grip-lines"></i>
	</section>
	<section class="sect">
		<div>
			<p>Houses near you</p>
			<span class="span">View all</span>
		</div>
		<div class="cards">
			<div class="1">
				<img src="./pool.jpg" alt="resort1"/>
				<p>Pool resort</p>
				<span class="span">$5000 <span>night</span></span>
				<p><i class="fa-sharp fa-solid fa-location-dot"></i>Lekki St, Lagos Abuja</p>
				<p><i class="fa-solid fa-layer-group"></i>Vanilla Island, Finderson</p>
			</div>
			<div class="2">
				<img src="./JW_LosCabos_2015_MainExterior.webp" alt="resort1"/>
				<p>Pool resort</p>
				<span class="span">$5000 <span>night</span></span>
				<p><i class="fa-sharp fa-solid fa-location-dot"></i>Lekki St, Lagos Abuja</p>
				<p><i class="fa-solid fa-layer-group"></i>Vanilla Island, Finderson</p>
			</div>
			<div class="3">
				<img src="./canada.jpg" alt="resort1"/>
				<p>Pool resort</p>
				<span class="span">$5000 <span>night</span></span>
				<p><i class="fa-sharp fa-solid fa-location-dot"></i>Lekki St, Lagos Abuja</p>
				<p><i class="fa-solid fa-layer-group"></i>Vanilla Island, Finderson</p>
			</div>
			<div class="4">
				<img src="./mati.jpg" alt="resort1"/>
				<p>Pool resort</p>
				<span class="span">$5000 <span>night</span></span>
				<p><i class="fa-sharp fa-solid fa-location-dot"></i>Lekki St, Lagos Abuja</p>
				<p><i class="fa-solid fa-layer-group"></i>Vanilla Island, Finderson</p>
			</div>
		</div>
	</section>
	<section class="sect">
		<div>
			<p>Featured Listings</p>
			<span class="span">View all</span>
		</div>
		<div class="cards2">
			<div>
				<img src="./pool.jpg" alt="resort1"/>
				<p>Pool resort</p>
				<span class="span">$5000 <span>night</span></span>
				<p><i class="fa-sharp fa-solid fa-location-dot"></i>Lekki St, Lagos Abuja</p>
				<p><i class="fa-solid fa-layer-group"></i>Vanilla Island, Finderson</p>
			</div>
			<div>
				<img src="./JW_LosCabos_2015_MainExterior.webp" alt="resort1"/>
				<p>Pool resort</p>
				<span class="span">$5000 <span>night</span></span>
				<p><i class="fa-sharp fa-solid fa-location-dot"></i>Lekki St, Lagos Abuja</p>
				<p><i class="fa-solid fa-layer-group"></i>Vanilla Island, Finderson</p>
			</div>
			<div>
				<img src="./canada.jpg" alt="resort1"/>
				<p>Pool resort</p>
				<span class="span">$5000 <span>night</span></span>
				<p><i class="fa-sharp fa-solid fa-location-dot"></i>Lekki St, Lagos Abuja</p>
				<p><i class="fa-solid fa-layer-group"></i>Vanilla Island, Finderson</p>
			</div>
			<div>
				<img src="./mati.jpg" alt="resort1"/>
				<p>Pool resort</p>
				<span class="span">$5000 <span>night</span></span>
				<p><i class="fa-sharp fa-solid fa-location-dot"></i>Lekki St, Lagos Abuja</p>
				<p><i class="fa-solid fa-layer-group"></i>Vanilla Island, Finderson</p>
			</div>
		</div>
	</section>
	<footer>
		<div class="links">
			<nav>
				<button><i class="fas fa-grip-lines fa-2x"></i></button>
				<ul>
					<li>Home</li>
					<li>About</li>
					<li>Works</li>
					<li><a href="./profile.php">Profile</a></li>
				</ul>
			</nav>
		</div>
		<div class="about">
			<img src="./jlogoonly.png"/>
			<p>Made by BENsla</p>
		</div>
	</footer>
	<script>
		const width = document.querySelector('.cards').clientWidth;
		const container = document.querySelector('.cards');
		const length = container.querySelectorAll('div');
		
		const font = document.querySelector('.fa-user-circle');
		font.style.hover = font.innerHTML = ''
		
	</script>
</body>
</html>
