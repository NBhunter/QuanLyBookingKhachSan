<?php 

require("model/database.php");
require("model/LoaiPhong.php");
require("model/Phong.php");
require("model/nguoidung.php");
require("model/datphong.php");

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
        if($nd->kiemtranguoidungbac1($email,$matkhau)==TRUE){
            $_SESSION["nguoidung"] = $nd->laythongtinnguoidunghople($email);
           // đọc thông tin (đơn hàng) của kh
           
           header("location:admin/index.php");
           }
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
            var_dump($_SESSION["khachhang"]);
        $idphong = $_REQUEST["id"];
        $phong = $p->layphongtheoid($idphong);
        include("php/checkout.php");
		}
        break;
	case "checkout":      
        
        // $dp = new DATPHONG();
        $id = $_SESSION["khachhang"]["id"];
            $idphong = $_POST["idphong"];
            $checkin = $_POST["checkin"];
            $checkout = $_POST["checkout"];
            $phong = $p->layphongtheoid($idphong);
            $tongngay = ((strtotime($checkout) - strtotime($checkin))/ (60 * 60 * 24));
            $thanhtien= (int)$tongngay*(int)$phong["gia"];
            $t=time();
			$iddatphong = date("mdhis",$t);
        if($p->datphong($iddatphong,$id,$idphong,$checkin,$checkout))
        {
         
            if($p->datphongct($iddatphong,$id,$idphong,$tongngay,$phong["gia"],$thanhtien)){
                echo '<script>alert("đã đặt phòng thành công")</script>';
                include("main.php");
            }
        }
        break;
		case "demo":
            $checkin = $_POST["checkin"];
            $checkout = $_POST["checkout"];
            $checkin1 =date('Y-m-d', strtotime('-1 day', strtotime($checkin)));
            $checkout1 = date('Y-m-d', strtotime('-1 day', strtotime($checkout)));
            // $tongngay = ((strtotime($checkout) - strtotime($checkin)));
            $Phong =  $p->layphongtheongay($checkin1,$checkout1);
            include("php/datphong.php");
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
