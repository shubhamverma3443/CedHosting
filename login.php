<?php
require_once 'processLogic.php';
if (isset($_POST['login'])) {
	$common = new common();
	$res = $common->mapVisitor($_POST['uname'], $_POST['password']);
	if ($res == 1) {
		header('location:User/index.php');
	} elseif ($res == 2) {
		header('location: Admin/CreateCategory.php');
	} else{
		echo '<script>alert("Please Enter Valid UserId or Password!");</script>';
	}
}
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
							<h1><a href="index.php">Planet Hosting</a></h1>
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
							<li><a href="pricing.php">Pricing</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
							<li class="active"><a href="login.php">Login</a></li>
						</ul>

					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
	</div>
	<!---header--->
	<!---login--->
	<div class="content">
		<div class="main-1">
			<div class="container">
				<div class="login-page">
					<div class="account_grid">
						<div class="col-md-6 login-left">
							<h3>new customers</h3>
							<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
							<a class="acount-btn" href="account.php">Create an Account</a>
						</div>
						<div class="col-md-6 login-right">
							<h3>registered</h3>
							<p>If you have an account with us, please log in.</p>
							<form action="" method="POST">
								<div>
									<span>Email Address<label>*</label></span>
									<input type="email" name="uname">
								</div>
								<div>
									<span>Password<label>*</label></span>
									<input type="password" name="password">
								</div>
								<a class="forgot" href="#">Forgot Your Password?</a>
								<input type="submit" value="Login" name="login">
							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- login -->
	<!---footer--->
	<?php require_once 'footer.php' ?>
	<!---footer--->
</body>

</html>