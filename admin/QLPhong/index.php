<?php 

require("../../model/database.php");
require("../../model/Phong.php");
// Xét xem có thao tác nào được chọn
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="xem";
}

$p = new PHONG();

switch($action){
    case "xem":
        
		include("main.php");
        break;
	
    default:
        break;
}
?>
