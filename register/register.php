<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registrations</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/registration-form-1.jpg" alt="">
				</div>
				<form action="../action/userAction.php" method="post">
					<h3>Registration Form</h3>
					<div class="form-group">
						<input type="text" name="fname" placeholder="First Name" class="form-control">
						<input type="text"  name="lname" placeholder="Last Name" class="form-control">
					</div>
					<div class="form-wrapper">
						<input type="number" name="number"  placeholder="Contact Number" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="email" name="email"  placeholder="Email Address" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<select name="gender" id="" class="form-control">
							<option value="" disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="femal">Female</option>
							<option value="other">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" name="pword"  placeholder="Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<!-- <div class="form-wrapper">
						<input type="password"  name="pword" placeholder="Confirm Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div> -->
					<button type="submit" name="save">Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>