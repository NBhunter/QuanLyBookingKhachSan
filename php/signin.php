	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Đăng nhập</title>
	
	<link rel="icon" type="image/x-icon" href="img/logoka.png">

	<!-- Google font -->


	<!-- Bootstrap -->
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../css/style.css" />

	<script src="https://kit.fontawesome.com/97d6784897.js" crossorigin="anonymous"></script>
<style>
*{font-family:consolas;}

.submit-btn:hover{
	background-color:#8CB369;
}
.ttk{
	color:#386641;
	text-decoration:none;
}
.ttk:hover{
	color:#8CB369;
	text-decoration:underline;
}
</style>
</head>
<body>
	<?php include 'navbar.php'; ?>

	<div id="signin" class="section" >
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="signin-form" style="width:768px;">
						<div class="form-header">
							<h1>ĐĂNG NHẬP</h1>
						</div>
						<form method="post" action="?action=xlsignin" >
							<div class="form-group">
								<span class="form-label">Email</span>
								<input  name="txtemail" class="form-control" type="text" required="" placeholder="Nhập email" >
							</div>
						
							<div class="form-group">
								<span class="form-label">Mật khẩu</span>
								<input name="txtmatkhau" class="form-control" type="password" required="" placeholder="Nhập mật khẩu">
							</div>
							
							<div class="form-group">
							<a href="?action=signup" class="ttk">Tạo tài khoản mới?</a></div>
							<div class="form-btn" align="center">
								<button class="submit-btn" type="submit">Đăng nhập</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
		<?php include 'footer.php'; ?>

	
