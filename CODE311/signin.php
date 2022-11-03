<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
		<title>Đăng nhập</title>
	</head>
	<body>
			<!-- Menu: sử dụng navbar -->
			
			<header class="site-navbar site-navbar-target bg-white" role="banner">
			<div class="container">
          <div class="row align-items-center position-relative">
            <div class="col-lg-4">
              <nav class="site-navigation text-right ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li class="active"><a href="index.php" class="nav-link">Home</a></li>
                  <li><a href="project.php" class="nav-link">Projects</a></li>
                  <li><a href="services.php" class="nav-link">Services</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-lg-4 text-center">
              <div class="site-logo">
                <a href="index.php">Booking</a>
              </div>


              <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3 text-black"></span></a></div>
            </div>
            <div class="col-lg-4">
              <nav class="site-navigation text-left mr-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="about.php" class="nav-link">About</a></li>
                  <li><a href="blog.php" class="nav-link">Blog</a></li>
                  <li><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>
            
          </div>
        </div>
      </header>
	  <div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
			<div class="booking-form">
					<div class="form-header">
			<!-- Nội dung: sử dụng card -->
					<h1>ĐĂNG NHẬP</h1>
					</div>
						<form action="" method="post" class="needs-validation" novalidate>
						<div class="row">
							<div class="mb-3">
							<label for="email" class="form-label">Email</label>
							<input type="email" class="form-control" id="email" name="email" required />
							<div class="invalid-feedback">Email không được bỏ trống.</div>
						</div>
						<div class="mb-3">
							<label for="password" class="form-label">Mật khẩu</label>
							<input type="password" class="form-control" id="password" name="password" required />
							<div class="invalid-feedback">Mật khẩu không được bỏ trống.</div>
						</div>
						<button type="submit" class="btn btn-primary">Đăng nhập</button>
					</form>
					</div>
				</div>
				</div>
				</div>
				</div>
				</div>
			</div>
			</div>
		
		<?php include 'footer.php'; ?>
		</div>
		
		<?php include 'javascript.php'; ?>
		<script>
			(function() {
				'use strict';
				var forms = document.querySelectorAll('.needs-validation');
				Array.prototype.slice.call(forms).forEach(function(form) {
					form.addEventListener('submit', function(event) {
						if (!form.checkValidity()) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			})();
		</script>
	</body>
</html>