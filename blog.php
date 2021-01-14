<?php
require_once 'processLogic.php';
?>
<!DOCTYPE HTML>
<html>

<head>
	<?php require_once 'head.php' ?>
</head>

<body>
	<!---header--->
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<i class="sr-only">Toggle navigation</i>
							<i class="icon-bar"></i>
							<i class="icon-bar"></i>
							<i class="icon-bar"></i>
						</button>
						<div class="navbar-brand">
							<h1><a href="index.html">Planet Hosting</a></h1>
						</div>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="services.php">Services</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
								<ul class="dropdown-menu">
									<?php
									$selectCategory = new admin();
									$productList = $selectCategory->selectCategory();
									foreach ($productList as $x => $y) {
										echo "<li><a href='productDetails.php?id=$x&name=$y'>$y</a></li>";
									}
									?>
								</ul>
							</li>
							<li><a href="pricing.php">Pricing</a></li>
							<li class="active"><a href="blog.php">Blog</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
							<li><a href="login.php">Login</a></li>
						</ul>
						</li>
						<li><a href="contact.php">Contact</a></li>
						</ul>

					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
	</div>
	<!---header--->
	<!---blog--->
	<div class="content">
		<div class="blog">
			<div class="container">
				<h2>blog</h2>
				<div class="blog-grids">
					<div class="col-md-1 blog-grid">
						<div class="date">
							<h4>09</h4>
							<p>oct</p>
						</div>
						<h6><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> 15</h6>
						<h6><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 10</h6>
					</div>
					<div class="col-md-11 blog-grid1">
						<a href="single.html" class="mask"><img src="images/b1.jpg" class="img-responsive zoom-img" alt="" /></a>
						<h4>Praesent justo dolor, lobortis quis, lobortis dignissim</h4>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at,cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
						<a href="single.html" class="button3">read more</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="blog-grids">
					<div class="col-md-1 blog-grid">
						<div class="date">
							<h4>19</h4>
							<p>oct</p>
						</div>
						<h6><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> 20</h6>
						<h6><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 12</h6>
					</div>
					<div class="col-md-11 blog-grid1">
						<a href="single.html" class="mask"><img src="images/b2.jpg" class="img-responsive zoom-img" alt="" /></a>
						<h4>Praesent justo dolor, lobortis quis, lobortis dignissim</h4>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at,cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
						<a href="single.html" class="button3">read more</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="blog-grids">
					<div class="col-md-1 blog-grid">
						<div class="date">
							<h4>29</h4>
							<p>oct</p>
						</div>
						<h6><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> 25</h6>
						<h6><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 15</h6>
					</div>
					<div class="col-md-11 blog-grid1">
						<a href="single.html" class="mask"><img src="images/b3.jpg" class="img-responsive zoom-img" alt="" /></a>
						<h4>Praesent justo dolor, lobortis quis, lobortis dignissim</h4>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at,cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
						<a href="single.html" class="button3">read more</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!---blog--->
	</div>
	<!---footer--->
	<?php require_once 'footer.php' ?>
	<!---footer--->


</body>

</html>