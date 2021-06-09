<?php require_once 'templates/mello/inc/header.php'; ?>
<?php require_once 'templates/mello/inc/leftbar.php'; ?>
<?php require_once 'util/function.php'; ?>
<div id="main" class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-main">
	<div class="product-essential">
		<div class="wrap">
			<?php
			$qr = "SELECT * FROM tbl_sanpham WHERE sanpham_id = {$_GET['sanpham_id']}";
			$result = $mysqli->query($qr);
			while ($row = mysqli_fetch_array($result)) {
			?>
				<form action="cart.php?action=add" method="post" id="product_addtocart_form">
					<div style="margin-bottom: 30px;margin-top:30px" class="product-name">
						<h1><?php echo $row['sanpham_name']; ?></h1>

					</div>
					<div class="product-img-box">
						<div class="image-main">
							<img style="width: 300px;height:300px" src="files/uploads/<?php echo $row['sanpham_image']; ?>" style="width:40%" alt="Product demo" />
						</div>
						<div class="click-quick-view">&nbsp;</div>


						<div class="image-quick-view no-display">

							<div class="content">
								<span class="close">x</span>
								<img src="files/uploads/<?php echo $row['sanpham_image']; ?>" alt="" />
							</div>
						</div>
					</div>
					<div class="product-shop" style="margin-top: -40%;float:right;width:57%">
						<div class="wrap-er">
							<div class="ratings">
								<div class="rating-box">
									<div class="rating" style="width:87%"></div>
								</div>
								<p class="rating-links">
									<a href="#">(1)</a>
									<span class="separator">|</span>
									<a class="re-temp" href="#">Add Your Review</a>
								</p>
							</div>
						</div>
						<br>
						<!--<div class="product-code"><label>Product code:</label></div>-->
						<div class="short-description">
							<div class="std"><span>
									<ul class="left">
										<li>Bảo hành:</li>
										<li>Đi kèm:</li>
										<li>Tình trạng:</li>
										<li>Khuyến mãi:</li>
										<li>Còn hàng:</li>
									</ul>
									<ul class="right">
										<li>12 tháng</li>
										<li>Hộp ,sách ,sạc, cáp, tai nghe</li>
										<li>Máy mới 100%</li>
										<li>Tất cả các sản phẩm khi mua online sẽ được freeship</li>
										<li>Còn hàng</li>
									</ul>
							</div>
							<div class="box-info-detail">
								<p class="availability in-stock">
									<span class="label">Availability:</span>
									<span class="value">In stock</span>
								</p>
								<br>
								<div style="margin-bottom: 30px;" class="price-info">
									<div class="price-box">
										<p class="old-price">
											<span style="font-size: 30px;" class="price">
												<?php echo number_format($row['sanpham_giakhuyenmai']) . ' vnđ'; ?></span>
										</p>
										<p class="special-price">
											<span class="price">
												<?php echo number_format($row['sanpham_gia']) . ' vnđ'; ?></span>
										</p>
									</div>
								</div>
								<label>Số lượng: </label>
								<input style="width:30px;border-radius:5px;text-align:center" id='quantity' min='1' name='quantity[<?php echo $row['sanpham_id']; ?>]' type='number' value='1' />
								<button style="margin-left: 50px;" class="btn btn-success btn-md" type="submit">Add To Cart</button>
								<div class="product-options-bottom">
									<div class="item">
										<div class="product-shop">

											<br />
											<br />
											<div class="add-to-box-sub">
												<ul class="add-to-links" style="display: flex;">
													<li><a style="border: 1px;padding: 7px;border-radius: 3px; background-color:darksalmon;margin-right:17px" href="wishlist.php?id=<?php echo $_GET['sanpham_id']; ?>" class="link-wishlist">Add to Wishlist</a></li>
													<li><a style="border: 1px;padding: 7px;border-radius: 3px; background-color:darksalmon" class="email-friend" href="https://mail.google.com/mail/u/0/#inbox">Email to a Friend</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!--div class="product-options-bottom">
									<div class="add-to-box add-to-cart">
																	</div>
									</div-->
							</div>
							<!-- end div .box-info-detail -->
						</div>
				</form>
			<?php
			}
			?>
			<div class="share-this" style="margin-top:18px;">
				<span class='st_sharethis_large' displayText='ShareThis'></span>
				<span class='st_facebook_large' displayText='Facebook'></span>
				<span class='st_twitter_large' displayText='Tweet'></span>
				<span class='st_linkedin_large' displayText='LinkedIn'></span>
				<span class='st_pinterest_large' displayText='Pinterest'></span>	
				<span class='st_email_large' displayText='Email'></span>
				<script type="text/javascript">
					var switchTo5x = true;
				</script>
				<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
				<script type="text/javascript">
					stLight.options({
						publisher: "6d56a077-95db-44a6-a019-d5a901534fea",
						doNotHash: false,
						doNotCopy: false,
						hashAddressBar: false
					});
				</script>
			</div>
		</div>
		<div class="tab-detail">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">Đánh giá sản phẩm</a></li>
				<li><a data-toggle="tab" href="#menu1">Review</a></li>
			</ul>

			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					<?php
					if (isset($_SESSION['user'])) {
					?>
						<ul style="display: flex; padding-right:10px">
							<?php 
							$result_comment = mysqli_query($mysqli, "SELECT * FROM comment");
							$row_comment = mysqli_fetch_array($result_comment);
							?>
							<li><a href=""><i class="fa fa-clock-o"></i><?php echo $row_comment['created_time']; ?></a></li> 
						</ul>
						<style type="text/css">
							.style_comment {
								border: 1px solid #ddd;
								border-radius: 10px;
								background: #F0F0E9;
							}
						</style>
						<div class="row style_comment">
							<div class="col-md-2">
								<img width="100%" src="files/uploads/batman.jpg" alt="" class="img img-responsive img-thumbnail">
							</div>
							<div class="col-md-10">
								<div class="content" id="content"></div>
							</div>
						</div>
						<?php
						if (isset($_GET['sanpham_id'])) {
							$id_comment = $_GET['sanpham_id'];
						}
						?>
						<hr />
						<p><b>Viết đánh giá của bạn</b></p>
						<form id="form">
							<div class="form-group">
								<label>Tên:</label>
								<input type="text" name="ten" required="" id="name" class="form-control" placeholder="Đình Trọng">
							</div>
							<label for="">Nội dung</label>
							<textarea name="binhluan" id="msg" cols="30" rows="10"></textarea>
							<button id="btn" class="btn btn-default">Gửi đánh giá</button>
						</form>
					<?php
					}else{
						echo '<p>Hãy <a style="color: blue" href="login.php">Đăng nhập</a> để có thể đánh giá sản phẩm</p>';
					}
					?>



				</div>
				<div id="menu1" class="tab-pane fade">
					<h3>Product Reviews</h3>
					<br />
					<?php 
					if(isset($_GET['sanpham_id'])){
						$id_detail = $_GET['sanpham_id'];
					}
					$qr_detail = mysqli_query($mysqli, "SELECT * FROM tbl_sanpham WHERE sanpham_id = {$id_detail}");
					while($row = mysqli_fetch_array($qr_detail)){
						?>
						<p><?php echo $row['sanpham_des']; ?></p>
						<?php
					}
					?>
					
					
				</div>



			</div>

		</div>
	</div>
</div>
</div>
</div>
<!--end content-->
</body>

</html>
<?php require_once 'templates/mello/inc/footer.php'; ?>