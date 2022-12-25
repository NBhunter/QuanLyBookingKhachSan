<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Phòng đẹp vãi ò</title>
	
	<link rel="icon" type="image/x-icon" href="../img/ec.png">

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
body{
	font-family: 'Josefin Sans', sans-serif;
}

a.btn.btn-res{
	border:2px solid #b0b5b5;
	background-color:#89ba16;
	color:white;
	font-weight:bold;
}
</style>

</head>	

<body style="background-color: #F9FFEB;">
		<?php include 'navbar.php'; ?>

    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <img src="../img/about/phongdoi.jpg" width="100%">
        </div>
		
        <div class="col-12 col-md-6">
          <div class="product-info">
            <h1 class="product-name">Phòng VIP</h1>
            <div class="row item">
              <div class="col-4">
                <div class="product-title">Giá phòng</div>
              </div>
              <div class="col-8">
                <div class="product-result price">7 tỷ VNĐ</div>
              </div>
            </div>
            <div class="row item">
              <div class="col-4">
                <div class="product-title">Sức chứa</div>
              </div>
              <div class="col-8">
                <div class="product-result">Giường đôi ta</div>
              </div>
            </div>
            <div class="row item">
              <div class="col-4">
                <div class="product-title">Mô tả</div>
              </div>
              <div class="col-8">
                <div class="product-result">Nội thất tiện nghi cùng một không gian ấm cúng, giúp cho quí khách những trải nghiệm tuyệt vời</div>
              </div>
            </div>
			<br>
            <div class="btn-wrap">
              <a class="btn btn-res" href="">Đặt phòng</a>
            </div>
          </div>
        </div>
        <div class="col" style="margin-top:10px;">
          <div class="product-description">
            <nav class="nav nav-tabs" role="tablist">
              <a class="nav-link active nav-item" id="tab99-tab" data-toggle="tab" href="#tab99" role="tab" aria-controls="nav-room-tab-99" aria-selected="true">Chi tiết phòng</a>
              <a class="nav-link" data-toggle="tab" aria-controls="nav-room-tab-1" aria-selected="true" href="#tab1" role="tab">Qui Định Phòng</a>
            </nav>
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tab99" role="tabpanel" aria-labelledby="nav-room-tab-99">
                <div class="content addReadMore"><ul>
					<li>Phòng rộng 40 mét vuông với sàn lát gỗ</li>
					<li>Bộ ghế sa-lông tiếp khách riêng trong phòng</li>
					<li>Giường kích cỡ lớn</li>
					<li>Bồn tắm thủy lực</li>
					<li>Cửa sổ kiếng sang trọng và lớn</li>
					<li>Máy lạnh</li>
					<li>Khóa cửa cảm ứng</li>
					<li>Truyền hình cáp 37” LCD</li>
					<li>Đường truyền Internet không dây tốc độ cao</li>
					<li>Điện thoại quốc tế trực tiếp</li>
					<li>Đầu báo khói phòng cháy</li>
					<li>Ổ cắm điện đa năng 3 chấu</li>
					<li>Bình nấu nước nóng pha trà và cà phê</li>
					<li>Tủ lạnh nhỏ và thức ăn nhẹ</li>
					<li>Nước suối miễn phí</li>
				</ul></div>
              </div>
              <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="nav-room-tab-1"><p>Nội dung đang được cập nhật ...</p></div>
            </div>
          </div>
        </div>
      </div>
    </div>


<div class="jumbotron text-center" style="margin-bottom:0">
  		<?php include 'footer.php'; ?>
</div>

</body>
</html>