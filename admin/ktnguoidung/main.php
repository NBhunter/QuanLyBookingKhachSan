
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../../css/style.css">

	<script src="https://kit.fontawesome.com/97d6784897.js" crossorigin="anonymous"></script>

	<link rel="icon" type="image/x-icon" href="../../img/ct.png">

</head>

<body>
<header class="site-navbar site-navbar-target bg-white" role="banner">
  <?php 
  function curPageURL($target) { // hàm kiểm tra đang ở thư mục nào 
    $pageURL = $_SERVER["PHP_SELF"];
    $returnURL = "" ;
    switch($target){
      case("signin"):
        if($pageURL == "/QuanLyBookingKhachSan/php/about.php" || $pageURL == "/QuanLyBookingKhachSan/php/staffs.php" || $pageURL == "/QuanLyBookingKhachSan/php/signup.php" ||$pageURL == "/QuanLyBookingKhachSan/php/signin.php" )
                  { $returnURL = "signin.php";}else{ $returnURL =  "php/signin.php"; }
                  break;
    case("index"):
      if($pageURL == "/QuanLyBookingKhachSan/index.php" || $pageURL == "/QuanLyBookingKhachSan/res.php")
                  { $returnURL = "index.php";}else{ $returnURL =  "../index.php"; }
                  break;
    case("res"):
      if($pageURL == "/QuanLyBookingKhachSan/index.php" || $pageURL == "/QuanLyBookingKhachSan/res.php")
                  { $returnURL = "res.php";}else{ $returnURL =  "../res.php"; }
                  break;
    case("about"):
      if($pageURL == "/QuanLyBookingKhachSan/php/about.php" || $pageURL == "/QuanLyBookingKhachSan/php/staffs.php" || $pageURL == "/QuanLyBookingKhachSan/php/signup.php" ||$pageURL == "/QuanLyBookingKhachSan/php/signin.php" )
                  { $returnURL = "about.php";}else{ $returnURL =  "php/about.php"; }
                  break;
    case("staffs"):
      if($pageURL == "/QuanLyBookingKhachSan/php/about.php" || $pageURL == "/QuanLyBookingKhachSan/php/staffs.php" ||$pageURL == "/QuanLyBookingKhachSan/php/signup.php" || $pageURL == "/QuanLyBookingKhachSan/php/signin.php" )
                  { $returnURL = "staffs.php";}else{ $returnURL =  "php/staffs.php"; }
                  break;
    
    }
    return $returnURL;
   }
	 ?>
        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-lg-5 text-center">
              <nav class="site-navigation text-right ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li class="active"><a href="<?php echo curPageURL("index");  ?>" class="nav-link">Home</a></li>
                  <li class="dropdown">
						<a>About</a>
						  <ul class="dropdown-content" style="">
							<li><a href="<?php echo curPageURL("about");  ?>"><i class="fa-solid fa-hotel"></i> Hotel</a></li>
							<li><a href="<?php echo curPageURL("staffs");  ?>"><i class="fa-solid fa-clipboard-user"></i> Staffs</a></li>
						  </ul>
				  </li>
                  <li><a href="<?php echo curPageURL("res");  ?>" class="nav-link">Reservation</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-lg-2 text-center">
              <div class="site-logo">
                <a href="<?php echo curPageURL("index");  ?>">Booking</a>
              </div>
              <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3 text-black"></span></a></div>
            </div>
            <div class="col-lg-5 text-center">
              <nav class="site-navigation text-left mr-auto " role="navigation">
				<ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
					<li><a href="<?php echo curPageURL("signin");  ?>" class="nav-link">Sign in</a></li>
					<li><form>
						<input type="text" name="search" placeholder="Search..">
					</form></li>
                </ul>
              </nav>
            </div>
            
          </div>
        </div>

      </header>
	

<div>
<h3 >Trang quản trị</h3>
<p>Xin chào <?php echo $_SESSION["nguoidung"]["hoten"]; ?></p>
</div>

<?php include("../../php/footer.php"); ?>
