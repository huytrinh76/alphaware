<?php 
	include("function/login.php");
	include("function/customer_signup.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sản phẩm</title>
	<link rel="icon" href="img/logo.jpg" />
	<link rel = "stylesheet" type = "text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
			<ul>
				<li><a href="#signup"   data-toggle="modal">Đăng ký</a></li>
				<li><a href="#login"   data-toggle="modal">Đăng nhập</a></li>
			</ul>
	</div>
		<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Đăng nhập</h3>
			</div>
				<div class="modal-body">
					<form method="post">
					<center>
						<input type="email" name="email" placeholder="Email" style="width:250px;">
						<input type="password" name="password" placeholder="Mật khẩu" style="width:250px;">
					</center>
				</div>
			<div class="modal-footer">
				<input class="btn btn-primary" type="submit" name="login" value="Đăng nhập">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Đóng</button>
					</form>
			</div>
		</div>
	
		<div id="signup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">Đăng ký</h3>
				</div>
					<div class="modal-body">
						<center>
					<form method="post">
						<input type="text" name="firstname" placeholder="Họ" required>
						<input type="text" name="mi" placeholder="Tên đệm" maxlength="1" required>
						<input type="text" name="lastname" placeholder="Tên" required>
						<input type="text" name="address" placeholder="Địa chỉ" style="width:430px;"required>
						<input type="text" name="country" placeholder="Quốc gia" required>
						<input type="text" name="zipcode" placeholder="ZIP Code" required maxlength="4">
						<input type="text" name="mobile" placeholder="Số điện thoại" maxlength="11">
						<input type="text" name="telephone" placeholder="Số liên lạc nhà riêng" maxlength="8">
						<input type="email" name="email" placeholder="Email" required>
						<input type="password" name="password" placeholder="Mật khẩu" required>
						</center>
					</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" name="signup" value="Đăng ký">
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Đóng</button>
				</div>
					</form>
			</div>
	
	<br>
<div id="container">
<div class="nav">
	<ul>
	   <li><a href="index.php"><i class="icon-home"></i>Trang chủ</a></li>
	   <li><a href="product.php"><i class="icon-th-list"></i>Sản phẩm</a>
	   <li><a href="aboutus.php"><i class="icon-bookmark"></i>Về chúng tôi</a></li>
	   <li><a href="contactus.php"><i class="icon-inbox"></i>Hỗ trợ</a></li>
	   <li><a href="privacy.php"><i class="icon-info-sign"></i>Điều khoản</a></li>
	   <li><a href="faqs.php"><i class="icon-question-sign"></i>Câu hỏi thường gặp</a></li>
   </ul>
</div>
	
	<div class="nav1">
		<ul>
			<li><a href="product.php" class="active" style="color:#111;">Giày bóng rổ</a></li>
			<li>|</li>
			<li><a href="football.php">Giày bóng đá</a></li>
			<li>|</li>
			<li><a href="running.php">Giày chạy</a></li>
		</ul>
			
	</div>
	
	<div id="content">
		<br />
		<br />
		<div id="product">
			
			<?php 
			include ('function/addcart.php');
				
				$query = mysqli_query($conn, "SELECT *FROM product WHERE category='basketball' ORDER BY product_id DESC") or die (mysqli_error());
				
					while($fetch = mysqli_fetch_array($query))
						{
							
						$pid = $fetch['product_id'];
						
						$query1 = mysqli_query($conn, "SELECT * FROM stock WHERE product_id = '$pid'") or die (mysqli_error());
						$rows = mysqli_fetch_array($query1);
						
						$qty = $rows['qty'];
						if($qty <= 5){
						
						}else{
							echo "<div class='float'>";
							echo "<center>";
							echo "<a href='details.php?id=".$fetch['product_id']."'><img class='img-polaroid' src='photo/".$fetch['product_image']."' height = '300px' width = '300px'></a>";
							echo "".$fetch['product_name']."";
							echo "<br />";
							echo "Giá ".$fetch['product_price']."";
							echo "<br />";
							echo "<h3 class='text-info' style='position:absolute; margin-top:-90px; text-indent:15px;'> Kích cỡ: ".$fetch['product_size']."</h3>";
							echo "</center>";
							echo "</div>";
						}
							
						}
			?>
		</div>
	</div>





		<br />
</div>
	<br />
	<div id="footer">
		<div class="foot">
			<label style="font-size:17px;"> Copyright &copy; </label>
			<p style="font-size:25px;">IRON FEVER EST 2017</p>
		</div>
			
			<div id="foot">
				<h4>Links</h4>
					<ul>
						<a href="https://www.facebook.com/ironfevervietnam"><li>Facebook</li></a>
						<a href="https://www.instagram.com/ironfever_vietnam/"><li>Instagram</li></a>
					</ul>
			</div>
	</div>
</body>
</html>