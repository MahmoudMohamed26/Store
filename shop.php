<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/all.min.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/shop.css" />
	<title>BOTANICAL | SHOP</title>
</head>

<body>
	<div class="header">
		<div class="container">
			<div>
				<i class="fa-solid fa-phone fa-fw icon"></i>
				<p>Hotline: (602) 462 8889</p>
			</div>
			<div>
				<p>Wellcome To Botanical Store</p>
			</div>
			<div>
				<p>Currency: <span>USD</span></p>
				<p>Languages: <span>EN</span></p>
			</div>
		</div>
	</div>

	<header>
		<div class="container">
			<div class="logo">
				<img src="imgs/logo.png" width="120px" alt="" />
			</div>
			<div class="nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="shop.php">Shop</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="blog.php">Blog</a></li>
				</ul>
			</div>
			<div class="last">
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

	<div class="landing2">
		<div class="container">
			<div>
				<h2 class="heading_style">SHOP</h2>
			</div>
		</div>
	</div>

	<div class="store">
		<div class="container">
			<div class="left_side">
				<input type="text" placeholder="Search Product ..." />
				<i class="fa-solid fa-magnifying-glass fa-fw icon"></i>
				<div class="cat">
					<h4>PRODUCT CATEGORIES</h4>
					<ul>
						<li>
							<p>Dried</p>
							<span>6</span>
						</li>
						<li>
							<p>Vegetables</p>
							<span>8</span>
						</li>
						<li>
							<p>Fruits</p>
							<span>9</span>
						</li>
						<li>
							<p>Juice</p>
							<span>6</span>
						</li>
						<li>
							<p>Uncategorized</p>
							<span>1</span>
						</li>
					</ul>
				</div>
				<div class="filter">
					<h4>FILTER BY PRICE</h4>
					<input type="number" placeholder="Minimun price" />
					<input type="number" placeholder="Maximun price" />
					<button><span>Filter</span></button>
				</div>
				<div class="top">
					<h4>Top Rated</h4>
					<div class="element">
						<a href="#"><img src="imgs/top1.jpg" alt="" /></a>
						<div class="info">
							<p><a href="#">Vitamin C face wash</a></p>
							<span>$ 39.00</span>
						</div>
					</div>
					<div class="element">
						<a href="#"><img src="imgs/top2.jpg" alt="" /></a>
						<div class="info">
							<p><a href="#">Organic vegetables</a></p>
							<span>$ 21.00</span>
						</div>
					</div>
					<div class="element">
						<a href="#"><img src="imgs/top3.jpg" alt="" /></a>
						<div class="info">
							<p><a href="#">Organic cabbage</a></p>
							<span>$ 12.00</span>
						</div>
					</div>
					<div class="element">
						<a href="#"><img src="imgs/top4.jpg" alt="" /></a>
						<div class="info">
							<p><a href="#">Organic vegetables</a></p>
							<span>$ 25.00</span>
						</div>
					</div>
					<div class="element">
						<a href="#"><img src="imgs/top5.jpg" alt="" /></a>
						<div class="info">
							<p><a href="#">Vitamin C face wash</a></p>
							<span>$ 45.00</span>
						</div>
					</div>
				</div>
				<div class="tags">
					<h4>PRODUCT TAGS</h4>
					<span>Plant</span>
					<span>Floor</span>
					<span>Indoor</span>
					<span>Green</span>
					<span>Healthy</span>
					<span>Cactus</span>
					<span>House Plant</span>
					<span>Office tree</span>
				</div>
			</div>
			<div class="right_side">
				<div class="sort">
					<div class="left2">
						<a href=""><i class="fa-solid fa-table-cells-large fa-fw icon"></i></a>
						<a href=""><i class="fa-solid fa-list fa-fw icon"></i></a>
						<p>Showing 1–9 of 24 results</p>
					</div>
					<div class="right2">
						<span>Sort by:</span>
						<select>
							<option value="">Deafult</option>
							<option value="">Less Price</option>
							<option value="">More Price</option>
							<option value="">Popular</option>
						</select>
					</div>
				</div>

				<?php include 'db.php' ?>
				<?php include 'products.php' ?>

				<div class="pages">
					<div><i class="fa-solid fa-angle-left fa-fw icon"></i></div>
					<div class="selected">1</div>
					<div>2</div>
					<div>...</div>
					<div><i class="fa-solid fa-angle-right fa-fw icon"></i></div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'newsletter.php'; ?>

	<footer>
		<div class="container">
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
						<li><a href="#">Our Blog</a></li>
						<li><a href="#">Top Sellers</a></li>
						<li><a href="#">Our Blog</a></li>
						<li><a href="#">About Our Shop</a></li>
						<li><a href="#">Privacy policy</a></li>
					</ul>
				</div>
				<div class="element2">
					<h3>my account</h3>
					<ul>
						<li><a href="#">My account</a></li>
						<li><a href="#">Discount</a></li>
						<li><a href="#">Orders history</a></li>
						<li><a href="#">Personal information</a></li>
					</ul>
				</div>
				<div class="element2">
					<h3>products</h3>
					<ul>
						<li><a href="#">Delivery</a></li>
						<li><a href="#">Legal notice</a></li>
						<li><a href="#">Prices drop</a></li>
						<li><a href="#">New products</a></li>
						<li><a href="#">Best sales</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="copyrights">
				<div class="container">
				<p>
					Coppyright 2023-2024 by <span>&copy;Team Members</span> - All right
					reserved
				</p>
				</div>
			</div>
	</footer>
</body>

</html>