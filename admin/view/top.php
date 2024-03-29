<!DOCTYPE html>
<html lang="en">
<head>
	<title>KHÁCH SẠN KIẾN AN - Trang quản trị</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="icon" type="image/x-icon" href="../../img/icon/ad.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/97d6784897.js" crossorigin="anonymous"></script>

  <style>
.row.content {height: 1000px}
.sidenav {
	background-color: white; 
	height: 100%;

}
@media screen and (max-width: 767px) { .row.content {height: auto;} }

.col-sm-3{
	font-family:Consolas;
	font-size:15px;
	font-weight:bold;
}
.col-sm-9{
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}
.nav>li>a{
	color:#2c5c2b;
}
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover{
	background-color:#2c5c2b;
}

.nav>li>a:focus, .nav>li>a:hover{
	background-color:#2c5c2b;
	color:white;
}

.dropdown-toggle{
	color:white;
	font-size: 20px;
}

  </style>
</head>
<body>
<!-- Menu mh nhỏ -->
<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">booking</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Bảng điều khiển</a></li>
        <li><a href="">Quản lý tài khoản</a></li>
        <li><a href="../QLPhong/">Quản lý phòng</a></li>
        <li><a href="">Quản lý đặt phòng</a></li>
            
      </ul>
    </div>
  </div>
</nav>
<!-- Menu mh nhỏ - kết thúc -->
<div class="container-fluid">
  <div class="row content">
    <!-- Menu mh lớn -->     
    <div class="col-sm-3 sidenav hidden-xs">
      <h3 align="center"><a href="../../index.php" style="font-weight:bold;color:black"><span></span>BOOKING</a></h3><br>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#"></i>Bảng điều khiển </a></li>
        <li><a href=""><i class="fa-solid fa-users"></i> Quản lý tài khoản</a></li>
        <li><a href="../QLPhong/index.php"><i class="fa-solid fa-bed"></i> Quản lý phòng</a></li>
        <li><a href="../QLdatphong/index.php"><i class="fa-solid fa-bell-concierge"></i> Quản lý đặt phòng</a></li>
      
      </ul><br>
    </div>
    <!-- Menu mh lớn - kết thúc -->

    
    <div class="col-sm-9">
      <div class="container-fluid">  
        <!-- Thông tin người dùng - sẽ bổ sung ở bài thực hành sau -->        
		<br>		
        <div class="dropdown" style="text-align: right;">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-weight:bold;color:#6A994E;" >
            <span class="glyphicon glyphicon-user"></span> Chào 
			<?php  if(isset($_SESSION["nguoidung"]))echo $_SESSION["nguoidung"]["hoten"];?>
            <span class="caret"></span>
          </a>
            
          <ul class="dropdown-menu dropdown-menu-right">
			 <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Thông báo</a></li>
			 <li><a href="#" data-toggle="modal" data-target="#fcapnhatthongtin">
				<span class="glyphicon glyphicon-edit"></span> Hồ sơ cá nhân</a></li>
			 <li><a href="#" data-toggle="modal" data-target="#fdoimatkhau">
				<span class="glyphicon glyphicon-wrench"></span> Đổi mật khẩu</a></li>
			 <li class="divider"></li>
			 <li><a href="../ktnguoidung/index.php?action=dangxuat">
				<span class="glyphicon glyphicon-log-out"></span> Thoát</a></li>
		</ul>

        </div>
      </div>
      
<div class="modal fade" id="fcapnhatthongtin" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title">Hồ sơ cá nhân</h3>
			</div>
			<div class="modal-body">
			<form method="post" enctype="multipart/form-data">
			<div class="text-center">
			<img class="img-circle" src="../../img/men/<?php echo $_SESSION["nguoidung"]["hinhanh"]?>" alt="<?php echo
			$_SESSION["nguoidung"]["hoten"]; ?>" width="100px">
			</div>
				<div class="form-group"> 
					<label>Email</label> 
					<input class="form-control" type="email" name="txtemail"
					placeholder="Email" value="<?php echo $_SESSION["nguoidung"]["email"]; ?>"
					>
				</div> 
				<div class="form-group"> 
					<label>Số điện thoại</label> 
					<input class="form-control" type="number" name="txtdienthoai"
					placeholder="Email" value="<?php echo $_SESSION["nguoidung"]["sodienthoai"]; ?>"
					>
				</div> 
				<div class="form-group">
					<label>Họ tên</label>
					<input class="form-control" type="text" name="txthoten"
					placeholder="Họ tên" value="<?php echo $_SESSION["nguoidung"]["hoten"]; ?>"
					required></div>
				<div class="form-group">
					<label>Đổi hình đại diện</label>
					<input type="hidden" name="txthinhanh" value="<?php echo $_SESSION["nguoidung"]["hinhanh"]; ?>" >
					<input type="file" name="fhinh">
				</div>
				<div class="form-group">
					<input type="hidden" name="txtid" value="<?php echo	$_SESSION["nguoidung"]["id"]; ?>" > 
					<input type="hidden" name="action" value="capnhat" >
					<input class="btn btn-primary" type="submit" value="Lưu">
					<input class="btn btn-warning" type="reset" value="Hủy">
				</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
			</div>
		</div>
	</div>
 </div>