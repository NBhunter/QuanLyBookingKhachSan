<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<link rel="shortcut icon" href="img/kienan.ico">
	<title>Khách Sạn giường nằm - KA Hố tèo</title>
	
	<link rel="icon" type="image/x-icon" href="">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Cardo:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../css/style.css">

	<script src="https://kit.fontawesome.com/97d6784897.js" crossorigin="anonymous"></script>
<style>

.s-form{
	background-color: #bed48c;
	margin: auto;
	padding: 10px ;
	border-radius: 3px;
}
.submit-btn{
	margin: 10px 0px;
	color: #fff;
	background-color: #2c5c2b;
	font-weight: 700;
	height: 50px;
	border: none;
	display: block;
	font-size: 14px;
	width: 100%;
	text-transform: capitalize;
	border-radius: 3px;
}

.s-form .form-header {
	text-align: center;
	margin-bottom: 10px;
}

.s-form .form-header h1 {
	font-family: 'Cardo', serif;
	font-weight: 700;
	text-transform: capitalize;
	font-size: 38px;
	color: #2c5c2b;
	margin-top: 0;
	margin-bottom: 0px;
}

.s-form .form-group {
	position: relative;
	margin-bottom: 10px;
}

.s-form .form-control {
	background-color: #fff;
	height: 50px;
	padding: 0px 20px;
	border: 1px solid #e1e1e1;
	-webkit-box-shadow: none;
	box-shadow: none;
	border-radius: 3px;
	color: #6b6b6d;
	font-size: 14px;
}


.s-form input[type="date"].form-control:invalid {
	color: #e1e1e1;
}

.s-form select.form-control {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
}

.s-form select.form-control+.select-arrow {
	position: absolute;
	right: 0px;
	bottom: 0px;
	width: 24px;
	text-align: center;
	pointer-events: none;
	background: #e1e1e1;
	height: 50px;
	line-height: 50px;
	color: rgba(107, 107, 109, 0.3);
	font-size: 14px;
	border-radius: 0px 3px 3px 0px;
	-webkit-transition: 0.2s all;
	transition: 0.2s all;
}

.s-form select.form-control+.select-arrow::after {
	content: '\279C';
	display: block;
	-webkit-transform: rotate(90deg);
	transform: rotate(90deg);
}

.s-form select.form-control:focus+.select-arrow {
	background: #2c5c2b;
	color: #fff;
}

.s-form .form-label {
	font-size: 14px;
	font-weight: 700;
	margin-bottom: 3px;
	display: inline-block;
	color: #2c5c2b;
	text-transform: capitalize;
}

.mb-0 .btn{
	background-color: #bed48c;
	color:#2c5c2b;
	font-weight: bold;
}

</style>
</head>	
<body>
		<?php include 'navbar.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
		<div class="s-form">
			<div class="form-header"><h1>Tìm phòng</h1></div>
			<form method="post" action = "?action=demo">				
				<div class='row'>
					<div class="col-sm-6">
						<div class="form-group">
							<span class="form-label">Check In</span>
							<input class="form-control" name="checkin"type="date" value="<?php if(isset($checkin))echo $checkin;?>" required>
						</div>
					</div>
					
					<div class="col-sm-6">
						<div class="form-group">
							<span class="form-label">Check out</span>
							<input class="form-control" name="checkout"type="date" value="<?php if(isset($checkout))echo $checkout;?>" required>
						</div>
					</div>
				</div>
				
				<div class='row'>
					<div class="col">
						<div class="form-group">
							<span class="form-label">No of rooms</span>
							<select class="form-control">
								<option>1</option>
								<option>2</option>
								<option>3</option>
							</select>
							<span class="select-arrow"></span>
						</div>
					</div>
				</div>
				
				<div class='row'>
					<div class="col">
						<div class="form-group">
							<span class="form-label">Adults</span>
							<select class="form-control">
								<option>1</option>
								<option>2</option>
								<option>3</option>
							</select>
							<span class="select-arrow"></span>
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<span class="form-label">Children</span>
							<select class="form-control">
								<option>0</option>
								<option>1</option>
								<option>2</option>
							</select>
							<span class="select-arrow"></span>
						</div>
					</div>
				</div>
				<div class='row'>
					<div class="col">
						<div class="form-btn">
							<button class="submit-btn">Check availability</button>
						</div>
					</div>
				</div>
			</form>
	</div>

      <ul class="nav nav-pills nav-stacked"></ul>
      <!--<hr class="hidden-sm hidden-md hidden-lg">-->
    </div>
    <div class="col-sm-8">
      <h1>Kết quả đồ đó</h1>
	  <div class="card">
	  <?php
	foreach($Phong as $p):
	?>
	<div class="row">
	<div class="col-4">
				<div class="room-img" style='margin:10px;'>
					<img src="img/Room/<?php echo $p["hinhanh"]; ?>" width='100%'>
				</div>
			</div>
			<div class="col-8">
				<div class="room-desc" style='margin:10px;'>
					<h3><a href="" style="text-decoration:none; color:#2c5c2b;" ><?php echo $p["TenPhong"]; ?></a></h3>
					<p>Giá cả đồ:<?php echo $p["gia"]; ?> Đ</p>
					<p>Mô tả:<?php echo $p["motangan"]; ?></p>
					<p class="mb-0" align="right">
					<?php if($p["trangthai"]=='1'):?>
						<a class="btn btn-readmore" href="#" target="_blank" >Xem Thêm</a>
						
						<a class="btn btn-book" href="?action=datphong&id=<?php echo $p['id']?>"  >Đặt phòng</a>
						<?php endif;?>
					</p>
				</div>
			</div>
		</div>
		</div>
		<br>
	<?php
	endforeach;
	?>
	  
																																																																																																																																																																																																																																																																																																																																																																																								</div>
    </div>
</div>


<div class="jumbotron text-center" style="margin-bottom:0">
  		<?php include 'footer.php'; ?>
</div>

</body>
</html>