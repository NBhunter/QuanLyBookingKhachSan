<?php
require("../../model/database.php");
require("../../model/nguoidung.php");
// Biến $isLogin cho biết người dùng đăng nhập chưa
$isLogin = isset($_SESSION["nguoidung"]);
// Kiểm tra hành động $action: yêu cầu đăng nhập nếu chưa xác thực
if(isset($_REQUEST["action"])){
 $action = $_REQUEST["action"];
}
elseif($isLogin == FALSE){
 $action = "dangnhap";
}
else{
 $action="macdinh";
}
$nd = new NGUOIDUNG();
switch($action){
 case "macdinh": 
 include("main.php");
 break;
 case "dangnhap":

 break;
 case "xldangnhap":
 $email = $_GET["txtemail"];
 $matkhau = $_GET["txtmatkhau"];
 var_dump($email);
if($nd->kiemtranguoidungbac1($email,$matkhau)==TRUE){
 $_SESSION["nguoidung"] = $nd->laythongtinnguoidunghople($email);
 include("main.php");
 }
 else{

 include("signin.php");
 }
default:
break;
}
?>