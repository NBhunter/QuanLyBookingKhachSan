<?php include("../view/top.php");

?>
 
<h3>Quản lý Phòng đã đặt</h3> 
<br>
<!-- <a href="index.php?action=them" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Thêm Phòng</a> -->
<br> <br> 
<table class="table table-hover">
	<tr>
		<th>Tên Phòng</th>
		<th>Giá </th>
		<th>Người thuê</th>
        <th>Ngày checkin</th>
		<th>Ngày checkout</th>
		<th>Tổng tiền</th>
		<th>Trạng thái</th>		
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
	<?php
	foreach($Phong as $p):
	?>
	<tr>
		<td><?php echo $p["TenPhong"]; ?></td>
		<td><?php echo $p["gia"]; ?></td>
		<td>Họ Tên:<?php echo $p["hoten"]; ?></br> Số điện thoại:<?php echo $p["sodienthoai"]; ?></td>
        <td><?php echo $p["ngaynhanphong"]; ?></td>
		<td><?php  echo $p["ngaytraphong"]; ?></td>
		<td><?php  echo number_format($p["thanhtien"]); ?> Đ</td>
		<td class="text-center">
								<?php if($p['trangthai'] == 0): ?>
									<span class="badge badge-primary">Chưa checkin</span>
								<?php elseif($p['trangthai'] == 1): ?>
									<span class="badge badge-info">Đã checkin</span>
									<?php elseif($p['trangthai'] == 2): ?>
									<span class="badge badge-info">Đã checkout</span>
								<?php endif; ?>
							</td>
		<td><a class="btn btn-warning" href="index.php?action=sua&id=<?php echo $p["id"]; ?>"><span class="glyphicon glyphicon-edit"> </span></a></td>
		<td><a class="btn btn-danger" href="index.php?action=xoa&id=<?php echo $p["id"]; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
	</tr>
	<?php
	endforeach;
	?>
</table>
<?php include("../view/bottom.php"); ?>
