<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/kienan.ico">
	<script src="https://kit.fontawesome.com/97d6784897.js" crossorigin="anonymous"></script>

	<link rel="icon" type="image/x-icon" href="img/kienan.ico">

</head>

<body>
<header class="site-navbar site-navbar-target bg-white" role="banner">
 
        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-lg-5 text-center">
              <nav class="site-navigation text-right ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li class="active"><a href="index.php" class="nav-link">Home</a></li>
                  <li class="dropdown">
						<a>About</a>
						  <ul class="dropdown-content" style="">
							<li><a href="?action=hotel"><i class="fa-solid fa-hotel"></i> Hotel</a></li>
							<li><a href="?action=staffs"><i class="fa-solid fa-clipboard-user"></i> Staffs</a></li>
						  </ul>
				  </li>
                  <li><a href="?action=Reservation" class="nav-link">Reservation</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-lg-2 text-center">
              <div class="site-logo">
                <a href="index.php">Booking</a>
              </div>
              <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3 text-black"></span></a></div>
            </div>
            <div class="col-lg-5 text-center">
              <nav class="site-navigation text-left mr-auto " role="navigation">
				<ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">

        <?php 

		if(!isset($_SESSION["khachhang"])){ ?>
        
        <li><a href="?action=signin" class="nav-link">Sign in</a></li>
		<?php  
		}
   

		else{
		?>
			<li><a href="?action=xemthongtin" style="text-decoration:none;">Chào <?php echo $_SESSION["khachhang"]["hoten"]; ?></a></li>
			
			<li><a href="?action=dangxuat"style="text-decoration:none;">Thoát</a></li>
		<?php		
		}
		?>
					
          <li>
					<form method="post" action= "?action=searchroom">
            
						<input type="text" name="search" placeholder="Search..">
            
            <button class="submit-btn" type="submit" style="border-radius: 4px; background-color: #89ba16;border: 2px solid #89ba16;">Tìm</button>
					</form>
          </li>
          
                </ul>
              </nav>
            </div>
            
          </div>
        </div>

      </header>
	
</body>
</html>