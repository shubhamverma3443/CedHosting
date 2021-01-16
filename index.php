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

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
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
							<li><a href="blog.php">Blog</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
							<li><a href="login.php">Login</a></li>
						</ul>

					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
	</div>
	<!---header--->
	<!---banner--->
	<div class="banner">
		<div class="container">
			<div class="banner-grids">
				<div class="col-md-6 banner-grid">
					<img src="images/srceen.png" class="img-responsive" alt="" />
				</div>
				<div class="col-md-6 banner-grid">
					<h3>Unlimited Web Hosting</h3>
					<p>this hero area to show off some of your nice work. You can even have a video inside it since it’s great as a secondary call to action alongside this button underneath this text.</p>
					<a href="#" class="button">get started</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!---banner--->
	<!---brilliantly --->
	<div class="content">
		<div class="brilliant-section">
			<div class="container">
				<h2>this is what we do.</h2>
				<h5>We get the job done, no matter the project</h5>
				<div class="brilliant-grids">
					<div class="col-md-4 brilliant-grid">
						<div class="brilliant-left">
							<i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
						</div>
						<div class="brilliant-right">
							<h4>Expert Web Design</h4>
							<p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 brilliant-grid">
						<div class="brilliant-left">
							<i class="glyphicon glyphicon-cloud" aria-hidden="true"></i>
						</div>
						<div class="brilliant-right">
							<h4>ftp services</h4>
							<p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 brilliant-grid">
						<div class="brilliant-left">
							<i class="glyphicon glyphicon-signal" aria-hidden="true"></i>
						</div>
						<div class="brilliant-right">
							<h4>Support Service</h4>
							<p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="brilliant-grids">
					<div class="col-md-4 brilliant-grid">
						<div class="brilliant-left">
							<i class="glyphicon glyphicon-globe" aria-hidden="true"></i>
						</div>
						<div class="brilliant-right">
							<h4>multi domain</h4>
							<p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 brilliant-grid">
						<div class="brilliant-left">
							<i class="glyphicon glyphicon-link" aria-hidden="true"></i>
						</div>
						<div class="brilliant-right">
							<h4>Link Building</h4>
							<p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 brilliant-grid">
						<div class="brilliant-left">
							<i class="glyphicon glyphicon-phone" aria-hidden="true"></i>
						</div>
						<div class="brilliant-right">
							<h4>Mobile Optimization</h4>
							<p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!---brilliantly--->
		<!---team--->
		<div class="team">
			<h3>our team is one of the best</h3>
			<h5>Professionals that are always on top of their game</h5>
			<div class="team-grids">
				<section>
					<ul id="da-thumbs" class="da-thumbs">
						<li>
							<a href="images/t1.jpg" class="b-link-stripe b-animate-go thick box">
								<img src="images/t1.jpg" alt="" />
								<div>
									<h5>team</h5>
									<span>non suscipit leo fringilla non suscipit leo fringilla molestie That’s how we set ourselves apart</span>
								</div>
							</a>
						</li>
						<li>
							<a href="images/t2.jpg" class="b-link-stripe b-animate-go  thick box">
								<img src="images/t2.jpg" alt="" />
								<div>
									<h5>team</h5>
									<span>non suscipit leo fringilla non suscipit leo fringilla molestie That’s how we set ourselves apart</span>
								</div>
							</a>
						</li>
						<li>
							<a href="images/t3.jpg" class="b-link-stripe b-animate-go  thick box">
								<img src="images/t3.jpg" alt="" />
								<div>
									<h5>team</h5>
									<span>non suscipit leo fringilla non suscipit leo fringilla molestie That’s how we set ourselves apart</span>
								</div>
							</a>
						</li>
						<li>
							<a href="images/t4.jpg" class="b-link-stripe b-animate-go  thick box">
								<img src="images/t4.jpg" alt="" />
								<div>
									<h5>team</h5>
									<span>non suscipit leo fringilla non suscipit leo fringilla molestie That’s how we set ourselves apart</span>
								</div>
							</a>
						</li>
						<li>
							<a href="images/t5.jpg" class="b-link-stripe b-animate-go  thick box">
								<img src="images/t5.jpg" alt="" />
								<div>
									<h5>team</h5>
									<span>non suscipit leo fringilla non suscipit leo fringilla molestie That’s how we set ourselves apart</span>
								</div>
							</a>
						</li>
						<li>
							<a href="images/t6.jpg" class="b-link-stripe b-animate-go  thick box">
								<img src="images/t6.jpg" alt="" />
								<div>
									<h5>team</h5>
									<span>non suscipit leo fringilla non suscipit leo fringilla molestie That’s how we set ourselves apart</span>
								</div>
							</a>
						</li>
						<li>
							<a href="images/t7.jpg" class="b-link-stripe b-animate-go  thick box">
								<img src="images/t7.jpg" alt="" />
								<div>
									<h5>team</h5>
									<span>non suscipit leo fringilla non suscipit leo fringilla molestie That’s how we set ourselves apart</span>
								</div>
							</a>
						</li>
						<li>
							<a href="images/t8.jpg" class="b-link-stripe b-animate-go  thick box">
								<img src="images/t8.jpg" alt="" />
								<div>
									<h5>team</h5>
									<span>non suscipit leo fringilla non suscipit leo fringilla molestie That’s how we set ourselves apart</span>
								</div>
							</a>
						</li>
						<li>
							<a href="images/t9.jpg" class="b-link-stripe b-animate-go  thick box">
								<img src="images/t9.jpg" alt="" />
								<div>
									<h5>team</h5>
									<span>non suscipit leo fringilla non suscipit leo fringilla molestie That’s how we set ourselves apart</span>
								</div>
							</a>
						</li>
						<li>
							<a href="images/t10.jpg" class="b-link-stripe b-animate-go  thick box">
								<img src="images/t10.jpg" alt="" />
								<div>
									<h5>team</h5>
									<span>non suscipit leo fringilla non suscipit leo fringilla molestie That’s how we set ourselves apart</span>
								</div>
							</a>
						</li>
					</ul>
					<div class="clearfix"> </div>
				</section>

			</div>
		</div>
		<!---team--->
		<!---prices--->
		<div class="price-section">
			<div class="container">
				<h3>transparent prices</h3>
				<h5>Premium quality, low prices guaranteed!</h5>
				<div class="price-grids">
					<div class="col-md-3 price-grid">
						<div class="pricing">
							<div class="price-top">
								<h4>Bronze</h4>
							</div>
							<div class="price-bottom">
								<h6>$199/<span>month</span></h6>
								<ul>
									<li>2 Concepts</li>
									<li> 12 Total Revisions</li>
									<li>1 Year Free Hosting</li>
									<li> 1 Gb Disk Space</li>
									<li> 10 Email Address</li>
									<li> 2 Conference Calls</li>
									<li> E-mail Support</li>
								</ul>
								<a href="#" class="button1">get started</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 price-grid">
						<div class="pricing">
							<div class="price-top">
								<h4>Silver</h4>
							</div>
							<div class="price-bottom">
								<h6>$499/<span>month</span></h6>
								<ul>
									<li>2 Concepts</li>
									<li> 16 Total Revisions</li>
									<li>1 Year Free Hosting</li>
									<li> 2 Gb Disk Space</li>
									<li> 20 Email Address</li>
									<li> 5 Conference Calls</li>
									<li> E-mail Support</li>
								</ul>
								<a href="#" class="button1">get started</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 price-grid">
						<div class="seller">
						</div>
						<div class="pricing">
							<div class="price-top">
								<h4>Gold</h4>
							</div>
							<div class="price-bottom">
								<h6>$799/<span>month</span></h6>
								<ul>
									<li>2 Concepts</li>
									<li> 18 Total Revisions</li>
									<li>1 Year Free Hosting</li>
									<li> 4 Gb Disk Space</li>
									<li> 30 Email Address</li>
									<li> 7 Conference Calls</li>
									<li> E-mail Support</li>
								</ul>
								<a href="#" class="button1">get started</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 price-grid">
						<div class="pricing">
							<div class="price-top">
								<h4>Platinum</h4>
							</div>
							<div class="price-bottom">
								<h6>$777/<span>month</span></h6>
								<ul>
									<li>Unlimited Concepts</li>
									<li> Unlimited Revisions</li>
									<li>1 Year Free Hosting</li>
									<li> Unlimited Gb Disk Space</li>
									<li> 100 Email Address</li>
									<li> 20 Conference Calls</li>
									<li> Live Support</li>
								</ul>
								<a href="#" class="button1">get started</a>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!---prices--->
		<!---posts--->
		<div class="post-section">
			<div class="container">
				<h3>Check our recent posts</h3>
				<h5>We like to keep everyone updated</h5>
				<div class="post-grids">
					<div class="col-md-4 post-grid">
						<a href="single.html" class="mask"><img src="images/p1.jpg" class="img-responsive zoom-img" alt="/"></a>
						<a href="single.html">
							<h4>Vestibulum ipsums eros</h4>
						</a>
						<p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart from the competition.</p>
					</div>
					<div class="col-md-4 post-grid">
						<a href="single.html" class="mask"><img src="images/p2.jpg" class="img-responsive zoom-img" alt="/"></a>
						<a href="single.html">
							<h4>Vestibulum ipsums eros</h4>
						</a>
						<p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart from the competition.</p>
					</div>
					<div class="col-md-4 post-grid">
						<a href="single.html" class="mask"><img src="images/p3.jpg" class="img-responsive zoom-img" alt="/"></a>
						<a href="single.html">
							<h4>Vestibulum ipsums eros</h4>
						</a>
						<p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart from the competition.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!---posts--->
	</div>
	<!---footer--->
	<?php require_once 'footer.php' ?>
	<!---footer--->


</body>

</html>