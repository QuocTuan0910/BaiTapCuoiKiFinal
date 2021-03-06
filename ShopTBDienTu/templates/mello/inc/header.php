<?php
session_start();
require_once "util/DBConnectionUtil.php"; ?>
<?php require_once "util/utf8ToLatinUtil.php"; ?>
<!DOCTYPE html>
<html xml:lang="en" lang="en">

<head>
	<meta charset="UTF-8">
	<base href="http://localhost/ShopTBDienTu/">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="templates/mello/style/css/style-main.css" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans" media="all" />
	<title>MELLO</title>


	<!--js-->
	<script type="text/javascript" src="templates/mello/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="templates/mello/style/bootstrap/js/bootstrap.min.js"></script>
	<script src="templates/mello/js/galary-image/js/jquery.blueimp-gallery.min.js"></script>
	<script src="templates/mello/js/galary-image/js/bootstrap-image-gallery.js"></script>
	<script type="text/javascript" src="templates/mello/js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="templates/mello/js/slideshow/jquery.themepunch.revolution.js"></script>
	<script type="text/javascript" src="templates/mello/js/slideshow/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="templates/mello/js/price.js"></script>
	<script type="text/javascript" src="templates/mello/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="templates/mello/js/theme.js"></script>
	<script type="text/javascript" src="templates/mello/js/jquery-3.6.0.min.js"></script>

	<link href="templates/mello/css/" type="text/css">
	<script type="text/javascript" src="templates/mello/js/fancybox/jquery.fancybox.min.js"></script>



	<!-- Bootstrap -->
	<link rel="stylesheet" href="templates/mello/css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="templates/mello/css/magnific-popup.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="templates/mello/css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="templates/mello/css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
	<link rel="stylesheet" href="templates/mello/css/themify-icons.css">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="templates/mello/css/niceselect.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="templates/mello/css/animate.css">
	<!-- Flex Slider CSS -->
	<link rel="stylesheet" href="templates/mello/css/flex-slider.min.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="templates/mello/css/owl-carousel.css">
	<!-- Slicknav -->
	<link rel="stylesheet" href="templates/mello/css/slicknav.min.css">


	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="templates/mello/css/reset.css">
	<link rel="stylesheet" href="templates/mello/css/style.css">
	<link rel="stylesheet" href="templates/mello/css/cart.css">
	<link rel="stylesheet" href="templates/mello/css/responsive.css">

	<!-- Cart -->
	<!-- Jquery -->
	<script src="templates/mello/jss/jquery.min.js"></script>
	<script src="templates/mello/jss/jquery-migrate-3.0.0.js"></script>
	<script src="templates/mello/jss/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="templates/mello/jss/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="templates/mello/jss/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="templates/mello/jss/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="templates/mello/jss/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="templates/mello/jss/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="templates/mello/jss/magnific-popup.js"></script>
	<!-- Fancybox JS -->
	<script src="templates/mello/jss/facnybox.min.js"></script>
	<!-- Waypoints JS -->
	<script src="templates/mello/jss/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="templates/mello/jss/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="templates/mello/jss/nicesellect.js"></script>
	<!-- Ytplayer JS -->
	<script src="templates/mello/jss/ytplayer.min.js"></script>
	<!-- Flex Slider JS -->
	<script src="templates/mello/jss/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="templates/mello/jss/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="templates/mello/jss/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="templates/mello/jss/easing.js"></script>
	<!-- Active JS -->
	<script src="https://use.fontawesome.com/d0223c40fa.js"></script>

	<script src="https://www.paypal.com/sdk/js?client-id=ATqJoT8uledW83BN2RvdA4o9tptMnGw4EUVlV1na6YHhKgqXEHcJXE8t0EZLGsDr4mybfMJ5nXxL10vQ&disable-funding=credit,card"></script>

	<script src="templates/mello/js/index.js"></script>
	<!-- Favicon -->
	<link href="templates/mello/fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet">

	<script type="text/javascript" src="templates/mello/js/validator.js"></script>
	<script src='https://cdn.jsdelivr.net/g/lodash@4(lodash.min.js+lodash.fp.min.js)'></script>
	<link href="templates/admin/assets/css/font-awesome.css" rel="stylesheet" />



	</body>


</head>

<body>
	<!--begin header-->
	<div id="box-header">
		<div class="header-container">
			<div class="header">
				<div class="box-header-01">
					<div class="container">
						<div class="row">
							<div class="logo">
								<a href="trang-chu-mello-chuyen-ban-tbdt.html"><img src="templates/mello/images/logodefault.png" alt="" /></a>
							</div>
							<div class="menu">
								<div class="box-main-menu">
									<div class="main-menu">
										<ul>
											<?php
											$qr = "SELECT * FROM menu";
											$result = $mysqli->query($qr);
											while ($row = mysqli_fetch_array($result)) {
												$id_menu = $row['id_menu'];
												$name = $row['name_menu'];
												$nameReplace = utf8ToLatin($name);
												$url = $nameReplace . '-' . $id_menu;
											?>

												<li class="item1"><a href="<?php echo $url . '.menu' ?>"><?php echo $row['name_menu']; ?></a></li>
											<?php
											}
											?>
										</ul>
									</div>
								</div>
								<div>
								</div>
							</div>
							<div class="account-and-cart">
								<div class="my-account">
									<div class="content">
										<ul class="left">
											<li><a class="top-link-myaccount" href="tai-khoan-cua-toi">My Account</a></li>
											<li><a class="top-link-wishlist" href="san-pham-yeu-thich.html">My Wishlist</a></li>
											<li><a class="top-link-checkout" href="dang-xuat">SignOut</a></li>
											<li><a class="top-link-login" href="dang-nhap">SignIn</a></li>
										</ul>
										<ul class="right">
											<i class="fas fa-user"></i>
											<?php
											if (isset($_SESSION['user'])) {
												$name = $_SESSION['user']['fullname'];
												echo $name;
											}
											?>
											</li>
										</ul>
									</div>
								</div>
								<div class="box-cart">
									<div class="cart-mini">
										<div class="title">
											<span class="item">
										<?php 
										if(!empty($_SESSION['cart'])){
											$count = count($_SESSION['cart']);
											echo $count;
										}else{
											echo '0';
										}
										?>	
											</span>
										</div>
										<div class="block-content">
											<div class="inner">
												<ol id="cart-sidebar" class="mini-products-list">

												</ol>
												<div class="actions">
													<div class="a-inner">
														
														<a class="btn-mycart" href="gio-hang.html" title="View my cart">view my cart</a>
														<a href="kiem-tra-and-thu-thuc-thanh-toan.html" title="Checkout" class="btn-checkout">Checkout</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="bgr-menu">
					</div>
				</div>
				<br />
				<div class="box-header-03">
					<div class="container">
						<div class="row">
							<span class="shipping"><a href="mien-phi-giao-hang-mien-phi-doi-tra">Mi???n ph?? giao h??ng - Mi???n ph?? ?????i tr???</a></span>
							<span class="gift"><a href="goi-qua-tang-doc-quyen">G??i qu?? t???ng ?????c quy???n</a></span>
							<span class="customer"><a href="dich-vu-cham-soc-khach-hang">D???ch v??? ch??m s??c kh??ch h??ng 24/7</a></span>
							<div class="box-search">
								<form action="search.php?action=search" method="POST">
									<button><span>T??m ki???m</span></button>
									<input name="search" type="text" value="" placeholder="T??m ki???m trang web n??y..." />
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end header-->