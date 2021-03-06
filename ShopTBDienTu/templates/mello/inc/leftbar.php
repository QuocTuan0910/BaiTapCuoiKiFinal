<?php require_once "util/DBConnectionUtil.php"; ?>
<?php require_once "util/utf8ToLatinUtil.php"; ?>
<!--begin content-->
<div class="content">

	<div class="container">
		<div class="row">
			<div class="row">
				<div id="box-left" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<div class="block block-layered-nav">
					<br>
						<div class="block-title">
							<strong><span>Danh mục</span></strong>
						</div>
						<div class="block-content">
							<dl id="narrow-by-list">
								<dt id="tab1" class="tab-accordion accordion-close">Tablets</dt>
								<dd class="tabcontent1" style="display:none;">
									<ol>
										<?php
										$qr = "SELECT * FROM tbl_sanpham WHERE id_menu = 1 ORDER BY sanpham_id ASC";
										$result = $mysqli->query($qr);
										while ($row_tablets = mysqli_fetch_array($result)) {
										?>
											<li><a href="detail.php?sanpham_id=<?php echo $row_tablets['sanpham_id']; ?>"><?php echo $row_tablets['sanpham_name']; ?></a></li>
										<?php
										}
										?>
									</ol>
								</dd>
								<dt id="tab11" class="tab-accordion accordion-open">Smart Phone</dt>
								<dd class="tabcontent11" style="display:none;">
									<ol>
										<?php
										$qr2 = "SELECT * FROM tbl_sanpham WHERE id_menu = 2 ORDER BY sanpham_id ASC";
										$result2 = $mysqli->query($qr2);
										while ($row2 = mysqli_fetch_array($result2)) {
										?>
											<li><a href="detail.php?sanpham_id=<?php echo $row2['sanpham_id']; ?>"><?php echo $row2['sanpham_name']; ?></a></li>
										<?php
										}
										?>
									</ol>
								</dd>
								<dt id="tab12" class="tab-accordion accordion-open">Laptops</dt>
								<dd class="tabcontent12" style="display:none;">
									<ol>
										<?php
										$qr3 = "SELECT * FROM tbl_sanpham WHERE id_menu = 3 ORDER BY sanpham_id ASC";
										$result3 = $mysqli->query($qr3);
										while ($row3 = mysqli_fetch_array($result3)) {
										?>
											<li><a href="detail.php?sanpham_id=<?php echo $row3['sanpham_id']; ?>"><?php echo $row3['sanpham_name']; ?></a></li>
										<?php
										}
										?>
									</ol>
								</dd>
								<dt id="tab13" class="tab-accordion accordion-close">TV</dt>
								<dd class="tabcontent13" style="display:none;">
									<ol>
										<?php
										$qr4 = "SELECT * FROM tbl_sanpham WHERE id_menu = 14 ORDER BY sanpham_id ASC";
										$result4 = $mysqli->query($qr4);
										while ($row4 = mysqli_fetch_array($result4)) {
										?>
											<li><a href="detail.php?sanpham_id=<?php echo $row4['sanpham_id']; ?>"><?php echo $row4['sanpham_name']; ?></a></li>
										<?php
										}
										?>

									</ol>
								</dd>
								<dt id="tab2" class="tab-accordion accordion-close">Tủ lạnh</dt>
								<dd class="tabcontent2" style="display:none;">
									<ol>
										<?php
										$qr5 = "SELECT * FROM tbl_sanpham WHERE id_menu = 15 ORDER BY sanpham_id ASC";
										$result5 = $mysqli->query($qr5);
										while ($row5 = mysqli_fetch_array($result5)) {
										?>
											<li><a href="detail.php?sanpham_id=<?php echo $row5['sanpham_id']; ?>"><?php echo $row5['sanpham_name']; ?></a></li>
										<?php
										}
										?>
									</ol>
								</dd>
								<dt id="tab3" class="tab-accordion accordion-close">Camera & Photo</dt>
								<dd class="tabcontent3" style="display:none;">
									<ol>
										<?php
										$qr6 = "SELECT * FROM tbl_sanpham WHERE id_menu = 6 ORDER BY sanpham_id ASC";
										$result6 = $mysqli->query($qr6);
										while ($row6 = mysqli_fetch_array($result6)) {
										?>
											<li><a href="detail.php?sanpham_id=<?php echo $row6['sanpham_id']; ?>"><?php echo $row6['sanpham_name']; ?></a></li>
										<?php
										}
										?>
									</ol>
								</dd>
								<dt id="tab4" class="tab-accordion accordion-close">Máy giặt</dt>
								<dd class="tabcontent4" style="display:none;">
									<ol>
										<?php
										$qr6 = "SELECT * FROM tbl_sanpham WHERE id_menu = 16 ORDER BY sanpham_id ASC";
										$result6 = $mysqli->query($qr6);
										while ($row6 = mysqli_fetch_array($result6)) {
										?>
											<li><a href="detail.php?sanpham_id=<?php echo $row6['sanpham_id']; ?>"><?php echo $row6['sanpham_name']; ?></a></li>
										<?php
										}
										?>
									</ol>
								</dd>
								<dt id="tab5" class="tab-accordion accordion-close">Điều hòa</dt>
								<dd class="tabcontent5" style="display:none;">
									<ol>
										<?php
										$qr6 = "SELECT * FROM tbl_sanpham WHERE id_menu = 17 ORDER BY sanpham_id ASC";
										$result6 = $mysqli->query($qr6);
										while ($row6 = mysqli_fetch_array($result6)) {
										?>
											<li><a href="detail.php?sanpham_id=<?php echo $row6['sanpham_id']; ?>"><?php echo $row6['sanpham_name']; ?></a></li>
										<?php
										}
										?>
									</ol>
								</dd>
							</dl>
						</div>
						
					</div>
					<div class="block box-banner">
						<div id="box-banner" class="carousel slide" data-ride="carousel" data-interval="1500">
							<ol class="carousel-indicators">
								<li class="active" data-target="#box-banner" data-slide-to="0"></li>
								<li data-target="#box-banner" data-slide-to="1"></li>
								<li data-target="#box-banner" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="item active"><a href="detail.html"><img src="templates/mello/images/banner13.png" alt="banner" /></a>
									<div class="std">
										<span class="t1">up to 45%</span>
										<span class="t2">Nokia Lumia 920</span>
										<span class="t3">At verov eos et accusamus et iusto ods un dignissimos ducimus qui blan ditiis prasixer esentium</span>
									</div>
									<a class="gt-shop" href="#">Shop Now</a>
								</div>
								<div class="item"><a href="detail.html"><img src="templates/mello/images/banner14.png" alt="banner" /></a>
									<div class="std">
										<span class="t1">up to 50%</span>
										<span class="t2">Nokia Lumia 920</span>
										<span class="t3">At verov eos et accusamus et iusto ods un dignissimos ducimus qui blan ditiis prasixer esentium</span>
									</div>
									<a class="gt-shop" href="#">Shop Now</a>

								</div>
								<div class="item"><a href="detail.html"><img src="templates/mello/images/banner15.png" alt="banner" /></a>
									<div class="std">
										<span class="t1">up to 80%</span>
										<span class="t2">Nokia Lumia 920</span>
										<span class="t3">At verov eos et accusamus et iusto ods un dignissimos ducimus qui blan ditiis prasixer esentium</span>
									</div>
									<a class="gt-shop" href="#">Shop Now</a>

								</div>
							</div>
						</div>
					</div>
				</div>