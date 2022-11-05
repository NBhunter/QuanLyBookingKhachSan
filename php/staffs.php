<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking</title>
	
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

<style>
	html {
	  box-sizing: border-box;
	}
	
	.main {
	  background-color:#b0b5b5;
	}
	
	a{
	  color:#f4841a;
	}
	
	*, *:before, *:after {
	  box-sizing: inherit;
	}

	.column {
	  float: left;
	  width: 33.3%;
	  margin-bottom: 16px;
	  padding: 0 8px;
	}

	@media screen and (max-width: 650px) {
	  .column {
		width: 100%;
		display: block;
	  }
	}

	.card {
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	}
	
	.about-section {
	  padding: 50px;
	  text-align: center;
	  background-color: #222830;
	  color: #89ba16;
	}

	.card .container {
	  padding: 0 16px 16px;
	  text-align: center;
	}

	.container::after, .row::after {
	  content: "";
	  clear: both;
	  display: table;
	}

	img {
	  padding: 5px;
	  display: block;
	  margin-left: auto;
	  margin-right: auto;
	}
	
	

</style>
</head>

<body>
			<?php include 'navbar.php'; ?>
	<div class='staff'>
		<div class="main">
			<!-- Menu: sử dụng navbar -->
			
			<div class="about-section">
			  <h1>NHÂN SỰ</h1>
			</div>
			<br>
			<div class="row">
			  <div class="col-4">
				<div class="card">
				  <img src="../img/mem/RB.png" alt="Băng" style="width:35%">
				  <div class="container">
					<h3>Nguyễn Ra Băng</h3>
					<p class="title">CEO</p>
					<p>DTH195127 - DH20TH1</p>
					<p>
						<a href="mailto:nrbang_20th@student.agu.edu.vn"><i class="fa-solid fa-envelope"></i></a>
						<a target="_blank" href="https://github.com/NBhunter"><i class="fa-brands fa-github"></i></a>
					</p>
				  </div>
				</div>
			  </div>

			  <div class="col-4">
				<div class="card">
				  <img src="../img/mem/HK.png" alt="khang" style="width:35%">
				  <div class="container">
					<h3>Thái Hoàng Khang</h3>
					<p class="title">Art Director</p>
					<p>DTH195144 - DH20TH1</p>
					<p>
						<a href="mailto:thkhang_20th@student.agu.edu.vn"><i class="fa-solid fa-envelope"></i></a>
						<a target="_blank" href="https://github.com/hoangkhang21"><i class="fa-brands fa-github"></i></a>
					</p>
				  </div>
				</div>
			  </div>
			  
			  <div class="col-4">
				<div class="card">
				  <img src="../img/mem/MN.png" alt="ngọc" style="width:35%">
				  <div class="container">
					<h3>Nguyễn Minh Ngọc</h3>
					<p class="title">CEO</p>
					<p>DTH195160 - DH20TH1</p>
					<p>
						<a href="mailto:nmngoc_20th@student.agu.edu.vn"><i class="fa-solid fa-envelope"></i></a>
						<a target="_blank" href="https://github.com/NgocMinh66"><i class="fa-brands fa-github"></i></a>
					</p>
				  </div>
				</div>
			  </div>
			</div>
			<br>
			<div class="row">
			  <div class="col-2"></div>
			  <div class="col-4">
				<div class="card">
				  <img src="../img/mem/KC.png" alt="cương" style="width:35%">
				  <div class="container">
					<h3>Bùi Huỳnh Kim Cương</h3>
					<p class="title">Designer</p>
					<p>DTH195253 - DH20TH1</p>
					<p>
						<a href="mailto:bhkcuong_20th@student.agu.edu.vn"><i class="fa-solid fa-envelope"></i></a>
						<a target="_blank" href="https://github.com/kcuong20th"><i class="fa-brands fa-github"></i></a>
					</p>
				  </div>
				</div>
			  </div>

			  <div class="col-4">
				<div class="card">
				  <img src="../img/mem/DN.png" alt="nghi" style="width:35%">
				  <div class="container">
					<h3>Trịnh Hoàng Đông Nghi</h3>
					<p class="title">Janitor</p>
					<p>DTH195313 - DH20TH1</p>
					<p>
						<a href="mailto:thdnghi_20th@student.agu.edu.vn"><i class="fa-solid fa-envelope"></i></a>
						<a target="_blank" href="https://github.com/thdngh"><i class="fa-brands fa-github"></i></a>
					</p>
				  </div>
				</div>
			  </div>
			  <div class="col-2"></div>
		  </div>
	  <br>
	  
	</div>
	</div>
		
		<!-- Footer: tự code -->
		<?php include 'footer.php'; ?>

</body>
</html>

		