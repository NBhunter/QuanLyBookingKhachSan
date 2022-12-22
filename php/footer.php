<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
#dt5{
  text-align: left;
}
#dt4{
  text-align: left;
}
.badge {
  background-color: red;
  color: white;
  padding: 4px 8px;
  text-align: center;
  border-radius: 20px;
}
.icon-bar {
  top: 20px;
  
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 20px;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
  width: 60px;
}

.twitter {
  background: #55ACEE;
  color: white;
  width: 60px;
}

.google {
  background: #dd4b39;
  color: white;
  width: 60px;
}

.linkedin {
  background: #007bb5;
  color: white;
  width: 60px;
}

.youtube {
  background: #bb0000;
  color: white;
   width: 60px;
}

.content {
  margin-left: 60px;
  font-size: 20px;
}
body {margin:0;height:500px;}

</style>
<footer class="text-center"style="background-color:black; color: white;">
  <a class="up-arrow" href="#abc" data-toggle="tooltip" title="Lên trên">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <h2><a href="index.php">KIEN AN HOTEL</a></h2>
  <p>18 UNG VĂN KHIÊM, PHƯỜNG ĐÔNG XUYÊN, TP.LONG XUYÊN, TỈNH AN GIANG</p>  
  <div class="row">
  <div class="column" style="background-color:black;">
    <h3 id="dt4"><img src="img/kienan.png" width="70px" height="35x" style=""></i> KIEN AN HOTEL</h3>
    <hr>
    <p><h5 id="dt5"><b> - Zalo: 0369208649</b></h></p>
    <p><h5 id="dt5"> - Fb,page: KIEN AN HOTEL</h5></p>
    <p><h5 id="dt5"><b> - Gmail:kienanhotel@gmai.com</b></h></p>
 
    

      <div class="row" style="background-color:black; color: white;  ">
        <div class="icon-bar">
          <div class="column" style="width:13%; height:10%;">
            <a  class="facebook" style="border-radius:50%;"><i class="fa fa-facebook "></i></a> 
          </div>   
          <div class="column" style="width:13%; height:10%;">
            <a  class="google" style="border-radius:50%;"><i class="fa fa-google"></i></a> 
          </div>
          <div class="column" style="width:13%; height:10%;">
            <a  class="linkedin" style="border-radius:50%;"><i class="fa fa-linkedin"></i></a>
          </div>
          <div class="column" style="width:13%; height:10%;">
            <a  class="youtube" style="border-radius:50%;"><i class="fa fa-youtube"></i></a> 
          </div>
        </div>
      </div>
  </div>
    <div class="column" style="background-color:black; color: white;">
      <h2>Giờ mở cửa <span class="badge">Mới</span></h2>
      <hr>
      <p><h5><b><i class="fa fa-clock-o" style="font-size:27px;color:green; width:8%; height:10%;"></i>Mở cửa 24/24 </b></h></p>
      <p><h5><b><i class="fa fa-calendar" style="font-size:27px;color:green; width:8%; height:10%;"></i> Từ Thứ hai đến Chủ Nhật</b></h></p>
      <p><h5><b><i class="fa fa-bolt" style="font-size:31px;color:yellow; width:8%; height:10%;"></i> Ưu đãi giảm 10% cho khách hàng mới</b></h></p>
      <p><h5><b><i class="fa fa-home" style='font-size:27px; color:blue; width:10%; height:10%;'></i>CN1:25B Đinh Công Tráng, An Nghiệp, Ninh Kiều, Cần Thơ </b></h></p>
    </div>
    <div class="column" style="background-color:black; color: white;">
    <h3 id="dt5" ><i class="fa fa-phone" style="font-size:35px;color:green; width:8%; height:10%;"></i>Tổng đài hỗ trợ miễn phí</h3>
    <hr>
    <p><h5 id="dt5"><b> - Hỗ trợ đặt phòng: 098675848 (24/24)</b></h></p>
    <p><h5 id="dt5"><b> - Hỗ trợ tư vấn: 0979519572 (24/24)</b></h></p>
    <p><h5 id="dt5"><b> - Khiếu Nại: 0369208649 (7h30 - 19h30)</b></h></p>
    <p><h5 id="dt5"><b> - STK: 1012443822 VCB: THAI HOANG KHANG</b></h></p>
    <div class="row"style="background-color:black; color: white;">
          <div class="column" style=" font-size:28px; width:10%; height:10%;">
           <i class="fa fa-cc-paypal"></i>
          </div>   
          <div class="column" style= " font-size:28px;color:blue; width:10%; height:10%;">
          <i class="fa fa-cc-visa"></i>
          </div>
          <div class="column" style= " font-size:28px;color:white; width:10%; height:10%;">
          <i class="fa fa-cc-jcb"></i>
          </div>
          <div class="column" style= " font-size:28px;color:yellow; width:10%; height:10%;">
            <i class="fa fa-paypal"></i>
          </div>
          <div class="column" style= " font-size:28px;color:#09814A; width:10%; height:10%;">
            <i class="fa fa-cc-discover"></i>
          </div>
        </div>
      </div>
  </div>
  
</div>
</footer>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#abc']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>
</body>
</html>