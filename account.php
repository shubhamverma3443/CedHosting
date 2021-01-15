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
	if ($pass == 6) {
		$name = $fname . " " . $lname;
		$signUp = new common();
		$res = $signUp->signUp($name, $email, $mobile, $password, $_POST['sq'], $_POST['sa']);
		if ($res == 1) {
			echo "<script>alert('Successfully Registred')</script>";
		} else {
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style>
		#eVerify,
		#eotpVerify,
		#mVerify,
		#motpVerify,
		input[type='submit'] {
			background: #E7663F;
		}

		h2 {
			color: #7D75C7;
		}
	</style>
</head>

<body>
	<div class="container-fluid py-4">
		<h1>CedHosting</h1>
	</div>
	<h1 id="check"></h1>
	<div class="container mt-5 mb-3">
		<h2>Personal Information</h2>
		<form action="" method="POST">
			<div class="row py-3">
				<div class="col-md">
					<span class="text-muted">First Name<label class="text-danger">*</label></span>
					<input type="text" name="fname" value="<?php echo $fname; ?>" class="form-control" id="fname" required>
					<span class="error"><?php echo $fnameErr; ?></span>
				</div>
				<div class="col-md">
					<span class="text-muted">Last Name<label class="text-danger">*</label></span>
					<input type="text" name="lname" value="<?php echo $lname; ?>" class="form-control" id="lname" required>
					<span class="error"><?php echo $lnameErr; ?></span>
				</div>
			</div>
			<div class="row py-3">
				<div class="col-md">
					<span class="text-muted">Email Address<label class="text-danger">*</label></span>
					<div class="input-group mb-3">
						<input type="email" name="email" class="form-control" id="email" value="<?php echo $email; ?>">
						<input class="btn text-white" type="button" id="eVerify" value="Verify">
					</div>
					<span class="error"><?php echo $emailErr; ?></span>

				</div>
				<div class="col-md input-group mb-3">
					<input type="text" name="emailOTP" class="form-control" id="eotp">
					<button class="btn text-white" type="button" id="eotpVerify">Verify</button>
				</div>
			</div>
			<div class="row py-3">
				<div class="col-md">
					<span class="text-muted">Mobile Number<label class="text-danger">*</label></span>
					<div class="input-group mb-3">
						<input type="number" name="mobile" class="form-control" id="mobile" value="<?php echo $mobile; ?>">
						<button class="btn text-white" type="button" id="mVerify">Verify</button>
					</div>
					<span class="error"><?php echo $mobileErr; ?></span>

				</div>
				<div class="col-md input-group mb-3">
					<input type="text" name="mobileOTP" class="form-control" id="motp" placeholder="OTP">
					<button class="btn text-white" type="button" id="motpVerify">Verify</button>
				</div>
			</div>
			<div class="row py-3">
				<div class="col-md">
					<span class="text-muted">Security Question<label class="text-danger">*</label></span>
					<select name="sq" class="form-select">
						<option value="What was your childhood nickname?">What was your childhood nickname?</option>
						<option value="What is the name of your favourite childhood friend?">What is the name of your favourite childhood friend?</option>
						<option value="What was your favourite place to visit as a child?">What was your favourite place to visit as a child?</option>
						<option value="What was your dream job as a child?">What was your dream job as a child?</option>
						<option value="What is your favourite teacher's nickname?">What is your favourite teacher's nickname?</option>
					</select>
				</div>
				<div class="col-md">
					<span class="text-muted">Security Answer<label class="text-danger">*</label></span>
					<input type="text" name="sa" class="form-control" value="<?php echo $sa; ?>">

				</div>
			</div>
	</div>
	<div class="container mb-5">
		<h2>Login Information</h2>
		<div class="row py-3">
			<div class="col-md">
				<span class="text-muted">Password<label class="text-danger">*</label></span>
				<input type="text" name="pass" class="form-control">
				<span class="error"><?php echo $passErr; ?></span>
			</div>
			<div class="col-md">
				<span class="text-muted">Confirm Password<label class="text-danger">*</label></span>
				<input type="password" name="cpass" class="form-control">
			</div>
		</div>
		<input type="submit" class="btn text-white" value="SUBMIT" name="submit">
	</div>
	</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>	
</body>
<script src="Validations/validation.js"></script>
</html>