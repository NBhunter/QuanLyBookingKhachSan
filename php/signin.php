<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Signup</title>
	
	<link rel="icon" type="image/x-icon" href="../img/mon.ico">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Cardo:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../css/style.css" />

	<script src="https://kit.fontawesome.com/97d6784897.js" crossorigin="anonymous"></script>

</head>
<body>
	<?php include 'navbar.php'; ?>

	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>SIGN IN</h1>
						</div>
						<form>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<span class="form-label">Email</span>
									<input class="form-control" type="text" required="" placeholder="Nhập email">
								</div>

							</div>
							<div class="col-md-6">
								<div class="form-group">
									<span class="form-label">Mật khẩu</span>
									<input class="form-control" type="password" required="" placeholder="Nhập mật khẩu">
								</div>
							</div>
						</div>
							<a href="signup.php">need an account?</a>
							<div class="form-btn">
								<button class="submit-btn">Sign in</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php include 'footer.php'; ?>
	
</body>

</html>