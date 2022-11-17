<?php 
require("../../model/database.php");
require("../../model/nguoidung.php");

// Biến cho biết ng dùng đăng nhập chưa
$isLogin = isset($_SESSION["nguoidung"]);

if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
elseif($isLogin == FALSE){
    $action = "dangnhap";
}
else{
    $action="macdinh"; 
}

$nguoidung = new NGUOIDUNG();
switch($action){
 case "macdinh": 
 include("main.php");
 break;
 case "dangxuat":
    header("location:../../php/signin.php");
 break;
 case "dangnhap":
    header("location:../../php/signin.php");
 break;
 case "xldangnhap":
 $email = $_GET["txtemail"];
 $matkhau = $_GET["txtmatkhau"];
if($nguoidung->kiemtranguoidungbac1($email,$matkhau)==TRUE){
 $_SESSION["nguoidung"] = $nguoidung->laythongtinnguoidunghople($email);
 
 include("main.php");
 }
 else{

 include("signin.php");
 }
default:
break;
}
?>