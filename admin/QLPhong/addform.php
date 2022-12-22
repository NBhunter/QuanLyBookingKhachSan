<?php include("../view/top.php"); ?>

<h3>Thêm Phòng</h3> 
<br>
<form method="post" enctype="multipart/form-data" action="index.php">
<input type="hidden" name="action" value="xulythem">
<div class="form-group">
	<label>Loại phòng</label>
	<select class="form-control" name="optloaiphong">
	<?php
	foreach($loaiphong as $l):
	?>
		<option value="<?php echo $l["id"]; ?>"><?php echo $l["TenLoai"]; ?></option>
	<?php
	endforeach;
	?>
	</select>
</div>
<div class="form-group">
	<label>Tên Phòng</label>
	<input class="form-control" type="text" name="txttenphong">
</div>
<div class="form-group">
	<label>Giá</label>
	<input class="form-control" type="number" name="txtgia" value="0">
</div>
<div class="form-group">
	<label>Mô tả</label>
	<textarea class="form-control" name="txtmota"></textarea>
</div>
<div class="form-group">
	<label>Mô tả ngắn</label>
	<textarea class="form-control" name="txtmotangan"></textarea>
</div>
<div class="form-group">
	<label>Hình ảnh</label>
	<input class="form-control" type="file" name="filehinhanh">
</div>
<div class="form-group">
	<input type="submit" value="Lưu" class="btn btn-success">
	<input type="reset" value="Hủy" class="btn btn-warning">
</div>
</form>

<?php include("../view/bottom.php"); ?>
