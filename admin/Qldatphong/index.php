<?php 
require("../../model/database.php");
require("../../model/Phong.php");
require("../../model/LoaiPhong.php");
require("../../model/nguoidung.php");
// Xét xem có thao tác nào được chọn
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="xem";
}

$p = new PHONG();
$lp = new LOAIPHONG();
$nd = new NGUOIDUNG();
switch($action){
    case "xem":
        $DSP = new  PHONG();
$Phong = $DSP->layphongdadatadmin();
		include("main.php");
        break;
	case "them":
        $loaiphong = $lp->layloaiphong();
        include("addform.php");
        break;
    case "xulythem":	
		// xử lý file upload
		$hinhanh =  basename($_FILES["filehinhanh"]["name"]); // đường dẫn ảnh lưu trong db
		$duongdan = "../../img/Room/" . $hinhanh; // nơi lưu file upload

		move_uploaded_file($_FILES["filehinhanh"]["tmp_name"], $duongdan);
		// xử lý thêm		
		$tenphong = $_POST["txttenphong"];
		$mota = $_POST["txtmota"];
		$motangan = $_POST["txtmotangan"];
		$gia = $_POST["txtgia"];
        $loaiphong = $_POST["optloaiphong"];
		$p->themPhong($tenphong,$gia,$mota,$motangan,$hinhanh,$loaiphong);
		$Phong= $p->layphongadmin();
		include("main.php");
        break;
	case "sua":
		$id = $_REQUEST["id"];
		$m = $p->laydatphongtheoadminid($id);
		
        $phong = $p->layphongadmin();
        include("updateform.php");
        break;
	case "xulysua":	
		// xử lý thêm	
		$id = $_POST["txtid"];
		$idkh = $_POST["txtidkh"];	
		$idphong = $_POST["optPhong"];
		$tenkh = $_POST["txttenkhach"];
		$sodienthoai = $_POST["txtsdt"];
		$tongtien = $_POST["txttongtien"];
        // $loaiphong = $_POST["optphong"];
		$trangthai = $_POST["status"];
        $ngaytra = $_POST["txtngaytra"];
        $songay = $_POST["txtsongay"];
		// is_int($tongtien);
		$p->suadatPhong($id,$idphong,$ngaytra,$trangthai);
		$p->suadatPhongct($id,$idphong,$songay,$tongtien);
		$nd->suakhachhang($tenkh,$sodienthoai,$idkh);
		$Phong= $p->layphongdadatadmin();
		include("main.php");
        break;	
    default:
        break;
}
?>
