<!DOCTYPE html>
<html lang="en">

<head>
	<?php 
	include("../model/database.php");
	include("../model/nguoidung.php");
	$nd = new NGUOIDUNG();
	if ($_SERVER["REQUEST_METHOD"] == "login") {
		$nd = new NGUOIDUNG();
		$email = $_POST["txtemail"];
 	$matkhau = $_POST["txtmatkhau"];
	if($nd->kiemtranguoidungbac1($email,$matkhau)==TRUE){
 $_SESSION["nguoidung"] = $nd->laythongtinnguoidunghople($email);
 include("../admin/main.php");
	}
 }?>
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
	<?php include '../php/navbar.php'; ?>

	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>SIGN IN</h1>
						</div>
						<form method="login" action="">
						<div class="row">
							
							<div class="col-md-6">
							<input class="form-control"  type="text" name="txtemail" placeholder="Email" required><br>
							</div>
							<div class="col-md-6">
							
		                    <input class="form-control"  type="password" name="txtmatkhau" placeholder="Mật khẩu" required><br>
							</div>
							    <input type="hidden" name="action" value="xldangnhap" >
								<button class="submit-btn">Sign in</button>
</div>
				
							<a href="../php/signup.php">need an account?</a>
						</form>
				</div>
			</div>
		</div>
	</div>
</div>
	
	<?php include '../php/footer.php'; ?>
	
</body>

</html>