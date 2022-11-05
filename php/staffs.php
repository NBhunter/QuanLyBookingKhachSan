<!DOCTYPE html>
<html lang="en">

<head>
<?php
require_once("../model/database.php");
require_once("../model/nguoidung.php");
$nd = new NGUOIDUNG();

$nguoidung = $nd->laynguoidung();
 ?>
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
	  margin-bottom: 15px;
	  align-items: center;
	  
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
	.row{
		justify-content: center;
	  display: flex;
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
			<?php foreach ($nguoidung as $n){  ?>
			
			  <div class="col-4 ">
				<div class="card">
				  <img src="../img/mem/<?php echo $n["hinhanh"]; ?>"  style="width:35%">
				  <div class="container">
					<h3><?php echo $n["hoten"]; ?></h3>
					<p class="title">CEO</p>
					<p><?php echo $n["thongtin"]; ?></p>
					<p>
						<a href="mailto:<?php echo $n["email"]; ?>"><i class="fa-solid fa-envelope"></i></a>
						<a target="_blank" href="<?php echo $n["linkgithub"]; ?>"><i class="fa-brands fa-github"></i></a>
					</p>
				  
				</div>
			  </div>
			  </div>
				<?php }?>
			</div>
			  
			  
	  <br>
	  
	</div>
	</div>
		
		<!-- Footer: tự code -->
		<?php include 'footer.php'; ?>

</body>
</html>

		