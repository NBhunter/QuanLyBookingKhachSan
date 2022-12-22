<?php 
session_start();
require("model/database.php");
require("model/LoaiPhong.php");
require("model/Phong.php");
require("model/nguoidung.php");

$lp = new LOAIPHONG();
$p = new PHONG();
$nd = new NGUOIDUNG();
$loaiphong = $lp->layloaiphong();
$soluong=1;
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="macdinh"; 
}
// $mathangnoibat = $mh->laymathangnoibat();
$tmp= "";
switch($action){
    case "macdinh": 
        
       
        include("main.php");
        break;
    case "signin": 
		
        include("php/signin.php");
        break;
	case "xlsignin": 
		$email = $_POST["txtemail"];
        $matkhau = $_POST["txtmatkhau"];
        if($nd->kiemtranguoidungbac2($email,$matkhau)==TRUE){
             $_SESSION["khachhang"] = $nd->laythongtinnguoidunghople($email);
            // đọc thông tin (đơn hàng) của kh
			if($tmp == ""){
				include("main.php");
			}
			
			
        }
        else{
            echo '<script>alert("đăng nhập không thành công")</script>';
			
             include("php/signin.php");
        }
        
        break;
	case "signup": 
		
        include("php/signup.php");
        break;
	case "xlsignup": 
		
		$email = $_POST["txtemail"];
		$hoten = $_POST["txtname"];
        $matkhau = $_POST["password"];
		$reset = $_POST["reset"];
        $sdt = $_POST["sdt"];
		$ngaysinh = $_POST["ngaysinh"];
        $cccd = $_POST["txtcccd"];
        if($nd->kiemtranguoidungdadk($email)==FALSE){
            // $_SESSION["khachhang"] = $nd->laythongtinnguoidunghople($email);
            // đọc thông tin (đơn hàng) của kh

			$t=time();
			$id = date("mdhis",$t);
			$nd->themnguoidung($id);
			echo '<script>alert("đã đăng ký thành công, vui lòng đăng nhập")</script>';
			include("php/signin.php");
        }
        else{
			echo '<script>alert("tài khoảng đã được đăng ký, vui lòng đăng nhập")</script>';
			
             include("php/signin.php");
        }
        
        break;
    case "staffs": 
		$nguoidung = $nd->laynguoidung();
        include("php/staffs.php");
        break;
    case "Reservation":
		$Phong = $p->layphonghoatdong();
       include("php/datphong.php");
        break;
    case "hotel":
        
        
        include("php/about.php");
        break;
    case "searchroom":
        $search = $_POST["search"];
		if($search == ''){
			$Phong = $p->layphonghoatdong();
			include("php/datphong.php");
		}else{
			$Phong = $p->layphongtheoten($search);
			include("php/datphong.php");
		}
        break;
    case "datphong":
		$isLogin = isset($_SESSION["khachhang"]);
		
		if($isLogin == FALSE){
			$tmp= "datphong";
			echo '<script>alert("vui lòng đăng nhập để đặt phòng")</script>';
             include("php/signin.php");
		}else{
        $idphong = $_REQUEST["id"];
        $phong = $p->layphongtheoid($idphong);
        include("php/checkout.php");
		}
        break;
	case "datmua":        
        $giohang = laygiohang();
        include("checkout.php");
        break;
		case "luudonhang":
            // var_dump($_POST["txtsodienthoai"]) ;
            $email = $_POST["txtemail"];
            $hoten = $_POST["txthoten"];
            $sodienthoai = $_POST["txtsodienthoai"];
            $diachi = $_POST["txtdiachi"];
            
            // lưu thông tin khách nếu chưa có trong db (kiểm tra email có tồn tại chưa)
            // xử lý thêm...
         //   $kh = new KHACHHANG();
           
          $khachhang_id = $kh->themkhachhang($email,$sodienthoai,$hoten);
            //var_dump($khachhang_id);
            // lưu địa chỉ khách
            $dc = new DIACHI();
            $diachi_id = $dc->themdiachi($khachhang_id,$diachi);
            
            // lưu đơn hàng
            $dh = new DONHANG();
            $tongtien = tinhtiengiohang();
            $donhang_id = $dh->themdonhang($khachhang_id,$diachi_id,$tongtien);
            
            // lưu chi tiết đơn hàng
            $ct = new DONHANGCT();		
            $giohang = laygiohang();
            foreach($giohang as $mahang => $mh){
                $dongia = $mh["giaban"];
                $soluong = $mh["soluong"];
                $thanhtien = $mh["sotien"];
                $ct->themchitietdonhang($donhang_id,$mahang,$dongia,$soluong,$thanhtien);
                $mh = new MATHANG();
                $mh->capnhatsoluong($mahang, $soluong);
            }
            
            // xóa giỏ hàng
            xoagiohang();
            
            // chuyển đến trang cảm ơn
            include("message.php");
            break;
	case "dangnhap":
		include("loginform.php");
		break;
	case "xldangnhap":
		$email = $_POST["txtemail"];
        $matkhau = $_POST["txtmatkhau"];
        if($kh->kiemtrakhachhanghople($email,$matkhau)==TRUE){
            $_SESSION["khachhang"] = $kh->laythongtinkhachhang($email);
            // đọc thông tin (đơn hàng) của kh
			include("info.php");
        }
        else{
            $tb = "Đăng nhập không thành công!";
            include("loginform.php");
        }
        break;
	case "xemthongtin":
		// đọc thông tin
		include("info.php"); // trang info.php hiển thị các đơn đã đặt
		break;
	case "dangxuat":
		unset($_SESSION["khachhang"]);
        include("main.php");
		break;

    case "xemdonhang":
        $donhang = $mh->docdonhang();
		include("main.php");
        break;
        case "timkiem":
            $timkiem = $_REQUEST["search"];
            $mhct = $mh->timkiem($timkiem);
            $mh->tangluotxem($mhct["id"]);
            // var_dump($timkiem);
            // var_dump($mhct);
            // lấy thông tin chi tiết mặt hàng
            // $mhct = $mh->laymathangtheoid($mahang);
            // lấy các mặt hàng cùng danh mục
            $madm = $mhct["danhmuc_id"];
            $mathang = $mh->laymathangtheodanhmuc($madm);
            include("detail_search.php");
            break;

        default:
    
        break;
}
?>
