<?php include("../view/top.php");

?>
<style>
body{
	background-image: url('../../img/15.jpg');
	background-repeat:no-repeat;
	background-size:cover;"
}
.table{
	width:100%;
	background-color: white; 
	color: black;
	border-radius:2px;
}
.h{
	height:40px;
	margin:10px;
}
th,td{padding:10px;}
#hi{color:white;}
</style>
 <body>
<h2 style="color: white">Quản lý Phòng đã đặt</h2> 
<br>
<!-- <a href="index.php?action=them" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Thêm Phòng</a> -->
<br><br> 	
<table class="table" >
	<tr class="h">
		<th>Tên Phòng</th>
		<th>Giá </th>
		<th>Người thuê</th>
        <th>Check In</th>
		<th>Check Out</th>
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
								<?php if($p['status'] == 0): ?>
									<span class="badge badge-primary">Chưa checkin</span>
								<?php elseif($p['status'] == 1): ?>
									<span class="badge badge-info">Đã checkin</span>
									<?php elseif($p['status'] == 2): ?>
									<span class="badge badge-info">Đã checkout</span>
								<?php endif; ?>
							</td>
		<td><a class="btn btn-warning" href="index.php?action=sua&id=<?php echo $p["iddatphong"]; ?>"><span class="glyphicon glyphicon-edit"> </span></a></td>
		<td><a class="btn btn-danger" href="index.php?action=xoa&id=<?php echo $p["iddatphong"]; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
	</tr>
	<?php
	endforeach;
	?>
</table>
</body>
<?php include("../view/bottom.php"); ?>
