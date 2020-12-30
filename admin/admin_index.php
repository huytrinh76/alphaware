<!DOCTYPE html>
<html>
<head>
	<title>Quản lý IRON FEVER</title>
	<link rel="icon" href="img/logo.jpg" />
	<link rel = "stylesheet" type = "text/css" href="../css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="icon" href="../img/logo.jpg">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/button.js"></script>
	<script src="js/dropdown.js"></script>
	<script src="js/tab.js"></script>
	<script src="js/tooltip.js"></script>
	<script src="js/popover.js"></script>
	<script src="js/collapse.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/scrollspy.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/transition.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div id="header">
		<img src="../img/logo.jpg">
		<label>IRON FEVER</label>
	</div>
	
		<?php include('../function/admin_login.php');?>
	<div id="admin">
		<form method="post" class="well">
			<center>
				<legend>Quản Trị IRFV</legend>
					<table>
						<tr>
							<input type="text" name="username" placeholder="Tên tài khoản">
						</tr>
						<tr>
							<input type="password" name="password" placeholder="Mật khẩu">
						</tr>
						<br>
						<br>
							<input type="submit" name="enter" value="Đăng nhập" class="btn btn-primary" style="width:200px;">
					</table>
			</center>
		</form>
	</div>
	



</div>

</body>
</html>