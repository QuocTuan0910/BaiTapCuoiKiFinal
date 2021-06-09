<?php require_once 'templates/mello/inc/header.php' ?> 
<?php require_once 'templates/mello/inc/leftbar.php' ?> 
<!doctype html>
<html lang="en">

<head>
	<title>Contact Form 01</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<base href="http://localhost/ShopTBDienTu/">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="contact/css/style.css">

</head>

<body>
	<section class="ftco-section" style="width: 850px;margin-top: -30px">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Contact US</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<?php
						if (isset($_GET['msg']) && $_GET['msg']) {
							echo $_GET['msg'];
						}
						?>
						<div class="article">
							<div class="clr"></div>
							<?php
							if (isset($_POST['submit'])) {
								$name = $_POST['name'];
								$email = $_POST['email'];
								$subject = $_POST['subject'];
								$message = $_POST['message'];

								if ($name != "" && $email != "" ) {
									$sql = "INSERT INTO contact(name, email, subject, message) VALUES ('$name','$email','$subject','$message')";
									$sql = $mysqli->query($sql);
									?>
									<script>
									alert('Gửi thông tin thành công!')
									window.location.href = 'trang-chu-mello-chuyen-ban-tbdt.html';
									</script>
									<?php
								}
							}

							?>
							<div class="row no-gutters">
								<div class="col-md-7 d-flex align-items-stretch">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<form method="POST" >
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<input type="text" class="form-control" name="name" id="name" placeholder="Name">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<input type="email" class="form-control" name="email" id="email" placeholder="Email">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
													</div>
												</div>
												<input class="btn btn-primary" type="submit" name="submit" value="submit">
											</div>
										</form>
									</div>
								</div>
								<div class="col-md-5 d-flex align-items-stretch">
									<div class="info-wrap bg-primary w-100 p-lg-5 p-4">
										<h3 class="mb-4 mt-md-4">Contact us</h3>
										<div class="dbox w-100 d-flex align-items-start">
											<div class="icon d-flex align-items-center justify-content-center">
												<span class="fa fa-map-marker"></span>
											</div>
											<div class="text pl-3">
												<p style="color: white"><span>Address:</span>179 Pham Nhu Xuong, quan Lien Chieu, tp Da Nang</p>
											</div>
										</div>
										<div class="dbox w-100 d-flex align-items-center">
											<div class="icon d-flex align-items-center justify-content-center">
												<span class="fa fa-phone"></span>
											</div>
											<div class="text pl-3">
												<p><span>Phone:</span> <a href="tel://1234567920">84+ 99999999</a></p>
											</div>
										</div>
										<div class="dbox w-100 d-flex align-items-center">
											<div class="icon d-flex align-items-center justify-content-center">
												<span class="fa fa-paper-plane"></span>
											</div>
											<div class="text pl-3">
												<p><span>Email:</span> <a href="mailto:info@yoursite.com">dinhtrong@gmail.com</a></p>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>

	<script src="contact/js/jquery.min.js"></script>
	<script src="contact/js/popper.js"></script>
	<script src="contact/js/bootstrap.min.js"></script>
	<script src="contact/js/jquery.validate.min.js"></script>
	<script src="contact/js/main.js"></script>

</body>

</html>