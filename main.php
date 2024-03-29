<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>KHÁCH SẠN KIẾN AN </title>
	
	<link rel="icon" type="image/x-icon" href="img/logoka.png">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Cardo:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	
	<script src="https://kit.fontawesome.com/97d6784897.js" crossorigin="anonymous"></script>

<style>
.main{
	background-color:white;
	padding:10px;
	
}

#row1{
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	padding:10px;	
	background-color:#F9FFEB;
	cursor:pointer;
}
#row1 img:hover{
	opacity:0.9;	
	transform:scale(1.05);
	transition:0.3s;
}
p{
	text-indent:30px;
}


.btn.btn-readmore{
	padding:10px;
	text-indent:0;
}

.btn-readmore:hover{
	background-color:#DDE5B6;	
}
img{
	padding-top:10px;
	padding-bottom:10px;
}

</style>

</head>

<body id="ka">
		<?php include 'php/navbar.php'; ?>
	<header>
		<img src='img/bn3.jpg' width='100%'>
	</header>
	<br>
	<h3 style="font-style:italic;font-weight:bold;color:#89ba16;text-align:center;"> CHI TIẾT VỀ KHÁCH SẠN </h3>
	
	<div class='main'>
		<div class='container'>
		
			<div class='row'id="row1">

				<div class='col-md-6'>
					<img src='img/about/nhahang1.jpg' width='100%'>
				</div>
				<div class='col-md-6 '>
					<div class="row">
						<div class='col-md-6 ' style="padding:10px;">
							<div class="text">
								<h3 class="ka-subtitle" style="font-style:italic;">Restaurant </h3>
								<p align="justify">Nhà hàng ấm cúng với khu vực máy lạnh hoặc ngoài sân vườn, 
								với các món ăn chọn lọc thuần túy Việt Nam và các món ăn quốc tế Việt Nam. 
								Nhà hàng phục vụ café, ăn sáng nhẹ, ăn trưa và tối hoặc phục vụ tại phòng.</p>
								<p class="mb-0">
									<a class="btn btn-readmore" href="?action=hotel" target="_self">See more</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<br>
			
			<div class='row' id="row1">
				<div class='col-md-6'>
					<div class="row">
						<div class='col-md-6 '></div>
						<div class='col-md-6 ' style="padding:10px;">
							<div class="text">
								<h3 class="ka-subtitle" style="font-style:italic;" >Room</h3>
								<p align="justify">Đa dạng các loại phòng sẽ phù hợp với nhu cầu của quý khách. Phòng sạch đẹp, rộng rãi, thoáng mát với đầy đủ trang thiết bị.</p>
								<p class="mb-0">
									<a class="btn btn-readmore" href="res.php" target="_self">See more</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class='col-md-6'>
					<img src='img/about/room1.jpg' width='100%'>
				</div>				
				<div class='col-md-3'></div>
				
			</div>
			
			<br>
			
			<div class='row' id="row1">
				<div class='col-md-6'>
					<img src='img/about/pool.jpg' width='100%'>
				</div>
				
				<div class='col-md-6'>
					<div class="row">
						<div class='col-md-6 ' style="padding:10px;">
							<div class="text">
								<h3 class="ka-subtitle" style="font-style:italic;">Pool</h3>
								<p align="justify">Khách sạn có nhiều bể bơi rộng rãi có view hướng ra biển, phù hợp với mọi lứa tuổi.</p>
								<p class="mb-0">
									<a class="btn btn-readmore" href="about.php" target="_self">See more</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
		</div>
	</div>

		<?php include 'php/footer.php'; ?>
</body>

</html>