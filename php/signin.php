<!DOCTYPE html>
<html lang="en">

<head>
<?php 

	include("../model/database.php");
	include("../model/nguoidung.php");
	$href ="";
	
	var_dump($_SERVER["REQUEST_METHOD"]);
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nd = new NGUOIDUNG();
		$email = $_POST["txtemail"];
 		$matkhau = $_POST["txtmatkhau"];
		 var_dump($nd->kiemtranguoidungbac2($email,$matkhau)==TRUE);
	if($nd->kiemtranguoidungbac1($email,$matkhau)==TRUE){
		
 $_SESSION["nguoidung"] = $nd->laythongtinnguoidunghople($email);
 header("location:../admin/ktnguoidung/index.php?txtemail=".$email."&txtmatkhau=".$matkhau."&action=xldangnhap");
	}elseif($nd->kiemtranguoidungbac2($email,$matkhau)==TRUE){
		$_SESSION["nguoidung"] = $nd->laythongtinnguoidunghople($email);
		
		   }
		   else{

		   }
 }
?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Signup</title>
	
	<link rel="icon" type="image/x-icon" href="img/mon.ico">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Cardo:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../css/style.css" />

	<script src="https://kit.fontawesome.com/97d6784897.js" crossorigin="anonymous"></script>

</head>
<body>
	<?php include 'navbar.php'; ?>

	<div id="signin" class="section" >
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="signin-form" style="width:768px;">
						<div class="form-header">
							<h1>SIGN IN</h1>
						</div>
						<form method="post" action="" >
							<div class="form-group">
								<span class="form-label">Email</span>
								<input  name="txtemail" class="form-control" type="text" required="" placeholder="Nhập email" >
							</div>
						
							<div class="form-group">
								<span class="form-label">Mật khẩu</span>
								<input name="txtmatkhau" class="form-control" type="password" required="" placeholder="Nhập mật khẩu">
							</div>
							
							<div class="form-group">
							<a href="signup.php">need an account?</a></div>
							<div class="form-btn" align="center">
								<button class="submit-btn" type="submit">Sign in</button>
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