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
							<li class="active"><a href="pricing.php">Pricing</a></li>
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
	<!---prices--->
	<div class="content">
		<div class="detailed-section">
			<div class="container">
				<h2>Detailed</h2>
				<div class="detailed-grids">
					<div class="col-md-3 detailed-grid">
						<div class="detailed-top">
							<h4>bronze</h4>
						</div>
						<div class="detailed-bottom">
							<h5>$ 15.99 <span>P/M</span></h5>
							<ul>
								<li>40 GB Space</li>
								<li>120 GB Traffic</li>
								<li>100 Mailboxes</li>
								<li>1 Year Free Hosting</li>
								<li>PHP, Perl/CGI, MySQ</li>
							</ul>
							<a href="#" class="button1">shop now</a>
						</div>
					</div>
					<div class="col-md-3 detailed-grid">
						<div class="detailed-top">
							<h4>Silver</h4>
						</div>
						<div class="detailed-bottom">
							<h5>$ 25.99 <span>P/M</span></h5>
							<ul>
								<li>40 GB Space</li>
								<li>120 GB Traffic</li>
								<li>100 Mailboxes</li>
								<li>1 Year Free Hosting</li>
								<li>PHP, Perl/CGI, MySQ</li>
							</ul>
							<a href="#" class="button1">shop now</a>
						</div>
					</div>
					<div class="col-md-3 detailed-grid">
						<div class="detailed-top">
							<h4>Gold</h4>
						</div>
						<div class="detailed-bottom">
							<h5>$ 35.99 <span>P/M</span></h5>
							<ul>
								<li>40 GB Space</li>
								<li>120 GB Traffic</li>
								<li>100 Mailboxes</li>
								<li>1 Year Free Hosting</li>
								<li>PHP, Perl/CGI, MySQ</li>
							</ul>
							<a href="#" class="button1">shop now</a>
						</div>
					</div>
					<div class="col-md-3 detailed-grid">
						<div class="detailed-top">
							<h4>Platinum</h4>
						</div>
						<div class="detailed-bottom">
							<h5>$ 45.99 <span>P/M</span></h5>
							<ul>
								<li>40 GB Space</li>
								<li>120 GB Traffic</li>
								<li>100 Mailboxes</li>
								<li>1 Year Free Hosting</li>
								<li>PHP, Perl/CGI, MySQ</li>
							</ul>
							<a href="#" class="button1">shop now</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="date-table">
			<div class="container">
				<h3>date table</h3>
				<div class="table-grids">
					<div class="col-md-4 table-grid">
						<div class="table-top">
							<h4>Ultimate</h4>
						</div>
						<div class="table-bottom">
							<h5>$ 07.99 /<span class="month">Month</span></h5>
							<ul>
								<li><span>Bandwidth : </span>
									<strong>Unlimited</strong>
								</li>
								<li><span>Phone Support : </span>
									<strong>24/7</strong>
								</li>
								<li><span>Disk Space : </span>
									<strong>Unlimited</strong>
								</li>
								<li><span>Databases : </span>
									<strong>Unlimited</strong>
								</li>
								<li><span>Email Addresses : </span>
									<strong>Unlimited</strong>
								</li>
							</ul>
							<a href="#" class="button4">shop now</a>
						</div>
					</div>
					<div class="col-md-4 table-grid">
						<div class="table-top">
							<h4>Deluxe</h4>
						</div>
						<div class="table-bottom">
							<h5>$ 08.99 /<span class="month">Month</span></h5>
							<ul>
								<li><span>Bandwidth : </span>
									<strong>Unlimited</strong>
								</li>
								<li><span>Phone Support : </span>
									<strong>24/7</strong>
								</li>
								<li><span>Disk Space : </span>
									<strong>Unlimited</strong>
								</li>
								<li><span>Databases : </span>
									<strong>30</strong>
								</li>
								<li><span>Email Addresses : </span>
									<strong>250</strong>
								</li>
							</ul>
							<a href="#" class="button4">shop now</a>
						</div>
					</div>
					<div class="col-md-4 table-grid">
						<div class="table-top">
							<h4>Economy </h4>
						</div>
						<div class="table-bottom">
							<h5>$ 09.99 /<span class="month">Month</span></h5>
							<ul>
								<li><span>Bandwidth : </span>
									<strong>Unlimited</strong>
								</li>
								<li><span>Phone Support : </span>
									<strong>24/7</strong>
								</li>
								<li><span>Disk Space : </span>
									<strong>15 GB</strong>
								</li>
								<li><span>Databases : </span>
									<strong>15</strong>
								</li>
								<li><span>Email Addresses : </span>
									<strong>120</strong>
								</li>
							</ul>
							<a href="#" class="button4">shop now</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="simple-prices">
			<div class="container">
				<h3>simple</h3>
				<div class="simple-grids">
					<div class="col-md-6 simple-grid">
						<div class="simple-left">
							<h4>basic <span>package</span></h4>
							<h5>$12.99/<span>month</span></h5>
						</div>
						<div class="simple-right">
							<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							<a href="#">shop now</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 simple-grid">
						<div class="simple-left">
							<h4>normal <span>package</span></h4>
							<h5>$12.99/<span>month</span></h5>
						</div>
						<div class="simple-right">
							<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							<a href="#">shop now</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="simple-grids">
					<div class="col-md-6 simple-grid">
						<div class="simple-left">
							<h4>Optima <span>package</span></h4>
							<h5>$19.99 /<span>month</span></h5>
						</div>
						<div class="simple-right">
							<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							<a href="#">shop now</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 simple-grid">
						<div class="simple-left">
							<h4>Expert <span>package</span></h4>
							<h5>$29.99 /<span>month</span></h5>
						</div>
						<div class="simple-right">
							<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							<a href="#">shop now</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!---prices--->
	</div>
	<!---footer--->
	<?php require_once 'footer.php' ?>
	<!---footer--->


</body>

</html>