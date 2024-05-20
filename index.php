<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/all.min.css" />
	<link rel="stylesheet" href="css/main.css" />
	<title>BOTANICAL | HOME</title>
</head>

<body>
	<!-- Start Main Section -->

	<div class="main">
		<div class="landing_img">
			<img src="imgs/landing_img.png" width="800px" alt="" />
		</div>
		<header>
			<div class="special-container">
				<div class="left">
					<ul>
						<li>ENG</li>
						<li>USD</li>
					</ul>
				</div>
				<div class="nav">
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="shop.php">SHOP</a></li>
						<li><a href="admin.php">Admin Panel</a></li>
						<li><img src="imgs/logo.png" alt="" /></li>
						<li><a href="about.php">ABOUT</a></li>
						<li><a href="contact.html">CONTACT</a></li>
						<li><a href="blog.php">BLOG</a></li>
					</ul>
				</div>
				<div class="right">
					<i class="fa-solid fa-magnifying-glass fa-fw icon"></i>
					<i class="fa-regular fa-heart fa-fw icon"></i>
					<a href="cart.php" class="notfication"><i class="fa-solid fa-cart-shopping fa-fw icon"></i>
						<span>5</span>
					</a>
				</div>
				<div class="bars">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<div class="mega_menu">
					<ul>
						<li>
							<a href="index.php"><span>HOME</span></a>
						</li>
						<li>
							<a href="shop.php"><span>SHOP</span></a>
						</li>
						<li>
							<a href="admin.php"><span>Admin Panel</span></a>
						</li>
						<li>
							<a href="about.php"><span>ABOUT</span></a>
						</li>
						<li>
							<a href="contact.html"><span>CONTACT</span></a>
						</li>
						<li>
							<a href="cart.php"><span>CART</span></a>
						</li>
						<li>
							<a href="blog.php"><span>BLOG</span></a>
						</li>
					</ul>
				</div>
			</div>
		</header>

		<div class="landing">
			<div class="container">
				<div class="info">
					<span>Welcome to botanical</span>
					<h1 class="heading_style">Plants Gonna Make <br />People Happy.</h1>
					<p>Your Gate to every green and lovely things</p>
					<a href="shop.php"><button>
							<span>Shop Now </span><i class="fa-solid fa-arrow-right fa-fw icon"></i></button></a>
				</div>
			</div>
		</div>
	</div>

	<!-- Start Main Section -->

	<!-- Start About_us Section -->

	<div class="about_us">
		<div class="container">
			<div class="img">
				<img src="imgs/aboutus.jpg" alt="" />
			</div>
			<div class="conten2t">
				<div class="info">
					<div class="heading_style"><h1>Why choose us ?</h1></div>
					<p>
						Choose us for our unparalleled expertise in the field, backed by a
						team of seasoned professionals dedicated to delivering top-notch
						solutions tailored to your needs.
					</p>
				</div>
				<div class="section">
					<i class="fa-solid fa-tree fa-fw icon"></i>
					<div class="info">
						<h3>Hand Planted</h3>
						<p>
							Trees are essential pillars of Earth's ecosystems, providing
							oxygen, habitat, and countless resources.
						</p>
					</div>
				</div>
				<div class="section">
					<i class="fa-brands fa-pagelines fa-fw icon"></i>
					<div class="info">
						<h3>Natural Sunlight</h3>
						<p>
							Natural sunlight, a radiant source of energy, paints the world
							in a spectrum of warmth and brilliance.
						</p>
					</div>
				</div>
				<div class="section">
					<i class="fa-solid fa-leaf fa-fw icon"></i>
					<div class="info">
						<h3>Clean Air</h3>
						<p>
							Clean air is a vital elixir, sustaining life with every breath
							and fostering a healthier, more vibrant world.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Start About_us Section -->

	<!-- Start Products Section -->

	<?php
	include 'db.php';
	?>

	<div class="products">
		<div class="special-container">
			<div class="special-header">
				<h1 class="heading_style">Recent Products</h1>
				<img src="imgs/line.png" alt="" />
				<p>Explore our Recent products</p>
			</div>
			<?php include 'products.php' ?>
		</div>
	</div>

	<!-- Start Products Section -->

	<!-- Start Services Section -->

	<div class="services">
		<div class="container">
			<div class="element">
				<i class="fa-solid fa-truck fa-fw icon"></i>
				<div class="info">
					<h3>Free shipping order</h3>
					<p>On orders over $100</p>
				</div>
			</div>
			<div class="element">
				<i class="fa-solid fa-gift fa-fw icon"></i>
				<div class="info">
					<h3>Special gift card</h3>
					<p>The perfect gift idea</p>
				</div>
			</div>
			<div class="element">
				<i class="fa-solid fa-rotate-left fa-fw icon"></i>
				<div class="info">
					<h3>Return & exchange</h3>
					<p>Free return within 3 days</p>
				</div>
			</div>
			<div class="element">
				<i class="fa-solid fa-phone fa-fw icon"></i>
				<div class="info">
					<h3>Support 24 / 7</h3>
					<p>Customer support</p>
				</div>
			</div>
		</div>
	</div>

	<!-- End Services Section -->

	<!-- Start Adv Section -->

	<div class="adv">
		<div class="container">
			<div class="img">
				<a href="shop.php"><img src="imgs/adver1.png" alt="" /></a>
			</div>
			<div class="img">
				<a href="shop.php"><img src="imgs/adver2.png" alt="" /></a>
			</div>
		</div>
	</div>

	<!-- End Adv Section -->

	<!-- Start Sponser Section -->

	<div class="sponser">
		<div class="container">
			<div class="special-header">
				<h1 class="heading_style">Our Sponsers</h1>
				<img src="imgs/line.png" alt="" />
				<p>Explore Our Recent Sponsers</p>
			</div>
			<div class="section">
				<div class="img">
					<img src="imgs/spo1.png" alt="" />
				</div>
				<div class="img">
					<img src="imgs/spo2.png" alt="" />
				</div>
				<div class="img">
					<img src="imgs/spo3.png" alt="" />
				</div>
				<div class="img">
					<img src="imgs/spo4.png" alt="" />
				</div>
				<div class="img">
					<img src="imgs/spo5.png" alt="" />
				</div>
				<div class="img">
					<img src="imgs/spo6.png" alt="" />
				</div>
			</div>
		</div>
	</div>

	<!-- End Sponser Section -->

	<?php include 'newsletter.php'; ?>

	<!-- Start Footer Section -->

	<footer>
		<div class="special-container">
			<div class="section">
				<div class="element">
					<img src="imgs/logo.png" alt="" />
					<div>
						<i class="fa-solid fa-location-dot fa-fw icon"></i>
						<p>Address: 27 Talaat-harb street - Eltahrir - Cairo.</p>
					</div>
					<div>
						<i class="fa-solid fa-phone fa-fw icon"></i>
						<p>Phone : (+032) 3456 7890</p>
					</div>
					<div>
						<i class="fa-solid fa-envelope fa-fw icon"></i>
						<p>
							Email:
							<a href="mailto:Botanicalstore@gmail.com">Botanicalstore@gmail.com</a>
						</p>
					</div>
					<div>
						<p>Follow us :</p>
						<ul>
							<li><i class="fa-brands fa-facebook fa-fw icon"></i></li>
							<li><i class="fa-brands fa-instagram fa-fw icon"></i></li>
							<li><i class="fa-brands fa-linkedin fa-fw icon"></i></li>
							<li><i class="fa-brands fa-youtube fa-fw icon"></i></li>
						</ul>
					</div>
				</div>
				<div class="element2">
					<h3>information</h3>
					<ul>
						<li><a href="">Our Blog</a></li>
						<li><a href="">Top Sellers</a></li>
						<li><a href="">Our Blog</a></li>
						<li><a href="">About Our Shop</a></li>
						<li><a href="">Privacy policy</a></li>
					</ul>
				</div>
				<div class="element2">
					<h3>my account</h3>
					<ul>
						<li><a href="">My account</a></li>
						<li><a href="">Discount</a></li>
						<li><a href="">Orders history</a></li>
						<li><a href="">Personal information</a></li>
					</ul>
				</div>
				<div class="element2">
					<h3>products</h3>
					<ul>
						<li><a href="">Delivery</a></li>
						<li><a href="">Legal notice</a></li>
						<li><a href="">Prices drop</a></li>
						<li><a href="">New products</a></li>
						<li><a href="">Best sales</a></li>
					</ul>
				</div>
			</div>
			<div class="copyrights">
				<p>
					Coppyright 2023-2024 by <span>&copy;Team Members</span> - All right
					reserved
				</p>
			</div>
		</div>
	</footer>

	<!-- End Footer Section -->
</body>

</html>