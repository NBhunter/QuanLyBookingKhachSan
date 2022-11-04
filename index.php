<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Home</title>
	
	<link rel="icon" type="image/x-icon" href="img/mon.ico">

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
.mySlides {display:none;}
</style>

</head>

<body>
		<?php include 'navbar.php'; ?>
<div class='main'>
	<div class='container'align='center'>
		<div class="w3-content w3-section" style="max-width:500px">
		  <img class="mySlides" src="img/about/phongdon.jpg" style="width:100%">
		  <img class="mySlides" src="img/about/phongdoi.jpg" style="width:100%">
		  <img class="mySlides" src="img/about/phong3.jpg" style="width:100%">
		  
		</div>
		<br>
	</div>
</div>

		<?php include 'footer.php'; ?>
<script>
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 3000); // Change image every 2 seconds
}

</script>
</body>

</html>