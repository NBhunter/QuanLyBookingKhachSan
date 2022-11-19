<?php include("../view/top.php");
 require_once("../../model/database.php");
require_once("../../model/Phong.php");
$DSP = new  PHONG();
$Phong = $DSP->layphongadmin();
?>
 
<h3>Quản lý Phòng</h3> 
<br>
<a href="index.php?action=them" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Thêm Phòng</a>
<br> <br> 
<table class="table table-hover">
	<tr>
		<th>Tên Phòng</th>
		<th>Giá </th>
		<th>Mô Tả</th>
        <th>Mô Tả Ngắn</th>
		<th>Hình ảnh</th>		
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
	<?php
	foreach($Phong as $p):
	?>
	<tr>
		<td><?php echo $p["TenPhong"]; ?></td>
		<td><?php echo $p["gia"]; ?></td>
		<td><?php echo $p["mota"]; ?></td>
        <td><?php echo $p["motangan"]; ?></td>
		<td><img src="../../img/Room/<?php echo $p["hinhanh"]; ?>" width="80" class="img-thumbnail"></td>
		<!-- <td><a class="btn btn-warning" href="index.php?action=sua&id=<?php echo $m["id"]; ?>"><span class="glyphicon glyphicon-edit"> </span></a></td>
		<td><a class="btn btn-danger" href="index.php?action=xoa&id=<?php echo $m["id"]; ?>"><span class="glyphicon glyphicon-trash"></span></a></td> -->
	</tr>
	<?php
	endforeach;
	?>
</table>
<?php include("../../php/footer.php"); ?>