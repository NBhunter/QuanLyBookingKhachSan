<?php 

require("../../model/database.php");
require("../../model/Phong.php");
require("../../model/LoaiPhong.php");
// Xét xem có thao tác nào được chọn
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="xem";
}

$p = new PHONG();
$lp = new LOAIPHONG();
switch($action){
    case "xem":
        
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
		$m = $p->layphongtheoadminid($id);
        $loaiphong = $lp->layloaiphong();
        include("updateform.php");
        break;
	case "xulysua":	
		// xử lý file upload


		
		// xử lý thêm	
		$id = $_POST["txtid"];	
		$tenphong = $_POST["txttenphong"];
		$mota = $_POST["txtmota"];
		$motangan = $_POST["txtmotangan"];
		$gia = $_POST["txtgia"];
        $loaiphong = $_POST["optloaiphong"];
		$trangthai = $_POST["trangthai"];
        $hinhanh = $_POST["txthinhcu"];
		if($_FILES["filehinhanh"]["name"]!=""){
			$hinhanh =  basename($_FILES["filehinhanh"]["name"]); // đường dẫn ảnh lưu trong db
			$duongdan = "../../img/Room/" . $hinhanh; // nơi lưu file upload
			move_uploaded_file($_FILES["filehinhanh"]["tmp_name"], $duongdan);
		}
		
		$p->suaPhong($id,$tenphong,$gia,$mota,$motangan,$hinhanh,$loaiphong,$trangthai);
		$Phong= $p->layphongadmin();
		include("main.php");
        break;	
    default:
        break;
}
?>
