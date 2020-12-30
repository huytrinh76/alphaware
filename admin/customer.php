<?php
	include("../function/session.php");
	include("../db/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản lý IRON FEVER</title>
	<link rel = "stylesheet" type = "text/css" href="../css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="icon" href="../img/logo.jpg">
	<script src="../js/bootstrap.js"></script>
	<script src="../js/jquery-1.7.2.min.js"></script>
	<script src="../js/carousel.js"></script>
	<script src="../js/button.js"></script>
	<script src="../js/dropdown.js"></script>
	<script src="../js/tab.js"></script>
	<script src="../js/tooltip.js"></script>
	<script src="../js/popover.js"></script>
	<script src="../js/collapse.js"></script>
	<script src="../js/modal.js"></script>
	<script src="../js/scrollspy.js"></script>
	<script src="../js/alert.js"></script>
	<script src="../js/transition.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../javascripts/filter.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<div id="header" style="position:fixed;">
		<img src="../img/logo.jpg">
		<label>IRON FEVER</label>
		
			<?php
				$id = (int) $_SESSION['id'];
			
					$query = mysqli_query ($conn, "SELECT * FROM admin WHERE adminid = '$id' ") or die (mysqli_error());
					$fetch = mysqli_fetch_array ($query);
			?>
				
			<ul>
				<li><a href="../function/admin_logout.php"><i class="icon-off icon-white"></i>Đăng xuất</a></li>
				<li>Chào mừng:&nbsp;&nbsp;&nbsp;<a><i class="icon-user icon-white"></i><?php echo $fetch['username']; ?></a></li>
			</ul>
	</div>
	
	<br>
	
	<div id="leftnav">
		<ul>
			<li><a href="admin_home.php" style="color:#333;">Bảng điều khiển</a></li>
			<li><a href="admin_home.php">Products</a>
				<ul>
					<li><a href="admin_feature.php "style="font-size:15px; margin-left:15px;">Tiềm năng</a></li>
					<li><a href="admin_product.php "style="font-size:15px; margin-left:15px;">Giày bóng rổ</a></li>
					<li><a href="admin_football.php" style="font-size:15px; margin-left:15px;">Giày bóng đá</a></li>
					<li><a href="admin_running.php"style="font-size:15px; margin-left:15px;">Giày chạy</a></li>
				</ul>
			</li>
			<li><a href="transaction.php">Giao dịch</a></li>
			<li><a href="customer.php">Khách hàng</a></li>
			<li><a href="message.php">Tin nhắn</a></li>
			<li><a href="order.php">Đơn hàng</a></li>
		</ul>
	</div>
	
	<div id="rightcontent" style="position:absolute; top:10%;">
			<div class="alert alert-info"><center><h2>Khách hàng</h2></center></div>
			<br />
				<label  style="padding:5px; float:right;"><input type="text" name="filter" placeholder="Tìm tên khách hàng" id="filter"></label>
			<br />
		
		<div class="alert alert-info">
			<table class="table table-hover" style="background-color:;">
				<thead>
				<tr style="font-size:20px;">
					<th>Họ tên</th>
					<th>Địa chỉ</th>
					<th>Quốc gia</th>
					<th>Zipcode</th>
					<th>Điện Thoại</th>
					<th>Điện thoại bàn</th>
					<th>Email</th>
				</tr>
				</thead>
				<?php
					$query = mysqli_query($conn, "SELECT * FROM `customer`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query))
						{
				?>
				<tr>
					<td><?php echo $fetch['firstname'];?>&nbsp;<?php echo $fetch['mi'];?>&nbsp;<?php echo  $fetch['lastname'];?></td>
					<td><?php echo $fetch['address']?></td>
					<td><?php echo $fetch['country']?></td>
					<td><?php echo $fetch['zipcode']?></td>
					<td><?php echo $fetch['mobile']?></td>
					<td><?php echo $fetch['telephone']?></td>
					<td><?php echo $fetch['email']?></td>
				</tr>		
				<?php
					}
				?>
			</table>
		</div>
			
	</div>
	
	

</body>
</html>