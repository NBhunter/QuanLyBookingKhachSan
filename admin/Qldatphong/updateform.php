<?php include("../view/top.php"); 

?>
<div>
<h3>Cập nhật mặt hàng</h3>
<form method="post" action="index.php" enctype="multipart/form-data">
<input type="hidden" name="action" value="xulysua">
<input type="hidden" name="txtid" value="<?php echo $m["iddatphong"]; ?>">
<input type="hidden" name="txtidkh" value="<?php echo $m["idkh"]; ?>">

<input type="hidden" name="txtgia" id="txtgia" value="<?php echo $m["gia"]; ?>">
<div class="form-group">    
<label>Loại phòng</label>    
<select class="form-control" name="optPhong" value ="" readonly>
	<?php
	foreach($phong as $l):if($m["id_phong"] == $l["id"]){
	?>
		<option value="<?php echo $l["id"]; ?>" selected><?php echo $l["TenPhong"]; ?></option>
	<?php
	}
	endforeach;
	?>
</select></div>
<div class="form-group">
	<label>Tên khách hàng</label>
	<input class="form-control" type="text" name="txttenkhach" required value="<?php echo $m["hoten"]; ?>">
</div>
<div class="form-group">
	<label>số điện thoại</label>
	<input class="form-control" type="number" name="txtsdt" value="<?php echo $m["sodienthoai"]; ?>" required >
</div>
<div class="form-group">
	<label>ngày checkin</label>
	<input class="form-control" type="date" name="txtngaynhan" id="txtngaynhan" value="<?php echo $m["ngaynhanphong"]; ?>" required >
</div>
<div class="form-group">
	<label>ngày checkout</label>
	<input class="form-control" type="date"  name="txtngaytra" id="txtngaytra" value="<?php echo $m["ngaytraphong"]; ?>" required >
</div>
<div class="form-group">
	<label>Tổng tiền</label>
	
	<input type="hidden" name="txtsongay" value="<?php echo $m["songay"]; ?>">
	<input class="form-control" type="text" name="txttongtien" id="txttongtien" value="<?php echo $m["thanhtien"]; ?> " readonly >
	<div class="btn btn-info" onclick="myFunction()" name="tinhtien">Tính tiền</div>
</div>

<label>Trạng thái</label>    
<select class="form-control" name="status" value ="">
	<?php
	if($m["status"] == 0){
	?>
		<option value="0" selected>Chưa checkin</option>
		<option value="1" >đã checkin</option>
		<option value="2" >Đã checkout</option>
	<?php
	}
	elseif($m["status"] == 1){
		?>

			<option value="0" >Chưa checkin</option>
			<option value="1" selected>đã checkin</option>
			<option value="2" >Đã checkout</option>
		<?php
		}
		else{
		?>
		<option value="0" >Chưa checkin</option>
		<option value="1" >đã checkin</option>
		<option value="2" selected>Đã checkout</option>
	<?php
	}
	
	?>
</select></div>
<div class="form-group">
	<input type="submit" value="Lưu" class="btn btn-success">
	<input type="reset" value="Hủy" class="btn btn-warning">
</div>

</form>
</div>
<!-- JQuery: hiển thị/tắt phần tử chọn file hình ảnh -->
<script>
$(document).ready(function(){
    $("#file").hide();
    $("#chkdoianh").click(function(){        
        $("#file").toggle(500);
    });
});
function myFunction(){
	var x = new Date(document.getElementById("txtngaynhan").value);
	var y = new  Date(document.getElementById("txtngaytra").value);
	 var gia = document.getElementById("txtgia").value;
	
	 var songay = ((y.getTime()-x.getTime()) / (1000 * 3600 * 24))*gia;
	 var tongtien = songay;
	document.getElementById("txttongtien").value = tongtien;
	document.getElementById("txtsongay").value = songay;
}
</script>

<?php include("../view/bottom.php"); ?>