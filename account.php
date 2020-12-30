<?php
	include("function/session.php");
	include("db/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tài khoản cá nhân</title>
	<link rel = "stylesheet" type = "text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="icon" href="img/logo.jpg" />
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
		<img src="img/logo.jpg">
		<label>IRON FEVER</label>
		
			<?php
				$id = (int) $_SESSION['id'];
			
					$query = mysqli_query ($conn, "SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
					$fetch = mysqli_fetch_array ($query);
			?>
	
			<ul>
				<li><a href="function/logout.php"><i class="icon-off icon-white"></i>Đăng xuất</a></li>
				<li><a href="#profile" href  data-toggle="modal">Chào mừng:&nbsp;&nbsp;&nbsp;<i class="icon-user icon-white"></i><?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['lastname'];?></a></li>
			</ul>	
	</div>
<div id="container">	
		

							<?php
			
								$id = (int) $_SESSION['id'];
			
								$query = mysqli_query ($conn, "SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
								$fetch = mysqli_fetch_array ($query);
								{
									$firstname=$fetch['firstname'];
									$mi=$fetch['mi'];
									$lastname=$fetch['lastname'];
									$address=$fetch['address'];
									$country=$fetch['country'];
									$zipcode=$fetch['zipcode'];
									$mobile=$fetch['mobile'];
									$telephone=$fetch['telephone'];
									$email=$fetch['email'];
									$password=$fetch['password'];
									$customerid=$fetch['customerid'];
								}
						?>
				<div id="account">
					<form method="POST" action="function/edit_customer.php">
						<center>
						<h3>Chỉnh sửa tài khoản</h3>
							<table>
								<tr>
									<td>Họ:</td><td><input type="text" name="firstname"  required value="<?php echo $firstname; ?>"></td>
								</tr>
								<tr>
									<td>Tên đệm:</td><td><input type="text" name="mi"  maxlength="1" required value="<?php echo $mi;?>"></td>	
								</tr>
								<tr>
									<td>Tên:</td><td><input type="text" name="lastname"  required value="<?php  echo $lastname;?>"></td>
								</tr>
								<tr>
									<td>Địa chỉ:</td><td><input type="text" name="address"  style="width:430px;"required value="<?php echo $address;?>"></td>
								</tr>
								<tr>
									<td>Quốc gia:</td><td><input type="text" name="country"  required value="<?php echo $country;?>"></td>
								</tr>
								<tr>
									<td>ZIP Code:</td><td><input type="text" name="zipcode"  required value="<?php echo $zipcode;?>" maxlength="4"></td>
								</tr>	
								<tr>	
									<td>Số điện thoại:</td><td><input type="text" name="mobile"  value="<?php echo $mobile;?>" maxlength="11"></td>
								</tr>
								<tr>
									<td>Điện thoại bàn:</td><td><input type="text" name="telephone"  value="<?php echo $telephone;?>" maxlength="8"></td>
								</tr>
								<tr>
									<td>Email:</td><td><input type="email" name="email"  required value="<?php echo $email;?>"></td>
								</tr>
								<tr>
									<td>Mật khẩu</td><td><input type="password" name="password"  required value="<?php echo $password;?>"></td>
								</tr>
								<tr>
									<td></td><td><input type="submit" name="edit" value="Lưu thay đổi" class="btn btn-primary">&nbsp;<a href="home.php"><input type="button" name="cancel" value="Hủy thay đổi" class="btn btn-danger"></a></td>
								</tr>
							</table>	
						</center>
					</form>
				</div>
				
						
			
	<br>

</div>
</body>
</html>