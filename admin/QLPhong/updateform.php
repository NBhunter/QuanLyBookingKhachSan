<?php include("../view/top.php"); ?>
<div>
<h3>Cập nhật mặt hàng</h3>
<form method="post" action="index.php" enctype="multipart/form-data">
<input type="hidden" name="action" value="xulysua">
<input type="hidden" name="txtid" value="<?php echo $m["id"]; ?>">
<div class="form-group">    
<label>Loại phòng</label>    
<select class="form-control" name="optloaiphong" value ="">
	<?php
	foreach($loaiphong as $l):if($m["loaiphong"] == $l["id"]){
	?>
		<option value="<?php echo $l["id"]; ?>" selected><?php echo $l["TenLoai"]; ?></option>
	<?php
	}
	else{
		?>
		<option value="<?php echo $l["id"]; ?>"><?php echo $l["TenLoai"]; ?></option>
	<?php
	}
	endforeach;
	?>
</select></div>
<div class="form-group">
	<label>Tên Phòng</label>
	<input class="form-control" type="text" name="txttenphong" required value="<?php echo $m["TenPhong"]; ?>">
</div>
<div class="form-group">
	<label>Giá</label>
	<input class="form-control" type="number" name="txtgia" value="<?php echo $m["gia"]; ?>" required >
</div>
<div class="form-group">
	<label>Mô tả</label>
	<textarea class="form-control" name="txtmota" required value=""><?php echo $m["mota"]; ?></textarea>
</div>
<div class="form-group">
	<label>Mô tả ngắn</label>
	<textarea class="form-control" name="txtmotangan"><?php echo $m["motangan"]; ?></textarea>
</div>
<div class="form-group">
	<label>Hình ảnh</label>
	<input class="form-control" type="file" name="filehinhanh"        >
</div>
<label>Trạng thái</label>    
<select class="form-control" name="opttrangthai" value ="">
	<?php
	if($m["trangthai"] == 0){
	?>
		<option value="0" selected>Đang hoạt bảo trì</option>
		<option value="1" >Đang hoạt động</option>
	<?php
	}
	else{
		?>
		<option value="0" >Đang hoạt bảo trì</option>
		<option value="1" selected>Đang hoạt động</option>
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
</script>

<?php include("../view/bottom.php"); ?>