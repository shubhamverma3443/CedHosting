<?php
require_once 'processLogic.php';
$fnameErr = $lnameErr = $emailErr = $mobileErr = $passErr = $saErr =  "";
$fname = $lname = $email = $mobile = $password = $sa = "";
$pass = 6;
if (isset($_POST['submit'])) {
	if ($_POST['pass'] != $_POST['cpass']) {
		echo "<script>alert('Password and Confirm Password are not same!')</script>";
	} else {
		if (empty($_POST["fname"])) {
			$fnameErr = "First Name is required";
			$pass--;
		} else {
			$fname = test_input($_POST["fname"]);
			if (!preg_match("/^[a-zA-Z]*$/", $fname)) {
				$fnameErr = "Only letters allowed";
				$pass--;
			}
		}
		if (empty($_POST["lname"])) {
			$lnameErr = "Last Name is required";
			$pass--;
		} else {
			$lname = test_input($_POST["lname"]);
			if (!preg_match("/^[a-zA-Z]*$/", $lname)) {
				$lnameErr = "Only letters allowed";
				$pass--;
			}
		}
		if (empty($_POST["email"])) {
			$emailErr = "Email is required";
			$pass--;
		} else {
			$email = test_input($_POST["email"]);
			if (!preg_match("/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/", $email)) {
				$emailErr = "Enter Valid Email Address";
				$pass--;
			}
		}
		if (empty($_POST["mobile"])) {
			$mobileErr = "Mobile Number is required";
			$pass--;
		} else {
			$mobile = test_input($_POST["mobile"]);
			if (!preg_match("/^(\d)(?!\1+$)\d{9}$/", $mobile)) {
				$mobileErr = "Invalid Mobile Number";
				$pass--;
			}
		}
		if (empty($_POST["pass"])) {
			$passErr = "Name is required";
			$pass--;
		} else {
			$password = test_input($_POST["pass"]);
			if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$/", $password)) {
				$passErr = "Minimum eight and maximum 10 characters, at least one uppercase letter, one lowercase letter, one number and one special character";
				$pass--;
			}
		}
		if (empty($_POST["sa"])) {
			$saErr = "Security Answer is required";
			$pass--;
		} else {
			$sa = test_input($_POST["sa"]);
			if (!preg_match("/^[a-zA-Z0-9]*$/", $sa)) {
				$saErr = "No white space allowed";
				$pass--;
			}
		}
	}
	if ($pass == 0) {
		$name=$fname." ".$lname;
		$signUp = new common();
		$res=$signUp->signUp($name, $email, $mobile, $password, $_POST['sq'], $_POST['sa']);
		if($res=='1'){
			echo "<script>alert('Successfully Registred')</script>";
		}else{
			echo "<script>alert('Try Again')</script>";
		}
	}
}
function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
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
							<li><a href="pricing.php">Pricing</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
							<li><a href="login.php">Login</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
	</div>
	<!---header--->
	<!---login--->
	<div class="content">
		<!-- registration -->
		<div class="main-1">
			<div class="container">
				<div class="register">
					<form action="" method="POST">
						<div class="register-top-grid">
							<h3>personal information</h3>
							<div>
								<span>First Name<label>*</label></span>
								<input type="text" name="fname" value="<?php echo $fname; ?>" required>
								<span class="error"><?php echo $fnameErr; ?></span>
							</div>
							<div>
								<span>Last Name<label>*</label></span>
								<input type="text" name="lname" value="<?php echo $lname; ?>" required>
								<span class="error"><?php echo $lnameErr; ?></span>
							</div>
							<div>
								<span>Email Address<label>*</label></span>
								<input type="email" name="email" value="<?php echo $email; ?>">
								<span class="error"><?php echo $emailErr; ?></span>

							</div>
							<div>
								<span>OTP<label>*</label></span>
								<input type="text" name="emailOTP">
							</div>
							<div>
								<span>Mobile Number<label>*</label></span>
								<input type="number" name="mobile" value="<?php echo $mobile; ?>">
								<span class="error"><?php echo $mobileErr; ?></span>

							</div>
							<div>
								<span>OTP<label>*</label></span>
								<input type="text" name="mobileOTP">
							</div>
							<div>
								<span>Security Question<label>*</label></span>
								<select name="sq">
									<option value="What was your childhood nickname?">What was your childhood nickname?</option>
									<option value="What is the name of your favourite childhood friend?">What is the name of your favourite childhood friend?</option>
									<option value="What was your favourite place to visit as a child?">What was your favourite place to visit as a child?</option>
									<option value="What was your dream job as a child?">What was your dream job as a child?</option>
									<option value="What is your favourite teacher's nickname?">What is your favourite teacher's nickname?</option>
								</select>
							</div>
							<div>
								<span>Security Answer<label>*</label></span>
								<input type="text" name="sa" value="<?php echo $sa;?>">

							</div>
							<div class="clearfix"> </div>
							<a class="news-letter" href="#">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
							</a>
						</div>
						<div class="register-bottom-grid">
							<h3>login information</h3>
							<div>
								<span>Password<label>*</label></span>
								<input type="text" name="pass">
								<span class="error"><?php echo $passErr; ?></span>
							</div>
							<div>
								<span>Confirm Password<label>*</label></span>
								<input type="password" name="cpass">
							</div>
						</div>
						<div class="clearfix"> </div>
						<div class="register-but">
							<input type="submit" value="submit" name="submit">
							<div class="clearfix"> </div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- registration -->

	</div>
	<!-- login -->
	<!---footer--->
	<?php require_once 'footer.php' ?>
	<!---footer--->
</body>

</html>