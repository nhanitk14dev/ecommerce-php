<!-- banner -->
<div class="banner">
	<div class="w3l_banner_nav_left">
		<nav class="navbar nav_bottom">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header nav_2">
				<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
				<ul class="nav navbar-nav nav_1">
					<!-- <li class="dropdown mega-dropdown active">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Veggies & Fruits<span class="caret"></span></a>
						<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
							<div class="w3ls_vegetables">
								<ul>
									<li><a href="vegetables.html">Vegetables</a></li>
									<li><a href="vegetables.html">Fruits</a></li>
								</ul>
							</div>
						</div>
					</li> -->
					<?php
$conn = $pdo->open();
try {
	$stmt = $conn->prepare("SELECT * FROM category");
	$stmt->execute();
	foreach ($stmt as $row) {
		echo "
						<li><a href='category.php?category=" . $row['cat_slug'] . "'>" . $row['name'] . "</a></li>
						";
	}
} catch (PDOException $e) {
	echo "There is some problem in connection: " . $e->getMessage();
}
$pdo->close();
?>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
	</div>
	<div class="w3l_banner_nav_right">
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="w3l_banner_nav_right_banner">
							<h3>Make your <span>food</span> with Spicy.</h3>
							<div class="more">
								<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l_banner_nav_right_banner1">
							<h3>Make your <span>food</span> with Spicy.</h3>
							<div class="more">
								<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l_banner_nav_right_banner2">
							<h3>upto <i>50%</i> off.</h3>
							<div class="more">
								<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>
	</div>
	<div class="clearfix"></div>
</div>

<?php include 'includes/message_session.php';?>
<!-- banner -->
<div class="banner_bottom">
	<div class="wthree_banner_bottom_left_grid_sub">
	</div>
	<!-- Show 3 products hot  -->
	<div class="wthree_banner_bottom_left_grid_sub1">

<?php
$month = date('m');
$conn = $pdo->open();
try {

	$list_pro3 = $conn->prepare("SELECT *, SUM(quantity) AS total_qty FROM details LEFT JOIN sales ON sales.id=details.sales_id LEFT JOIN products ON products.id=details.product_id WHERE MONTH(sales_date) = '$month' GROUP BY details.product_id ORDER BY total_qty DESC LIMIT 3");
	$list_pro3->execute();
	foreach ($list_pro3 as $row) {
		$image = (!empty($row['photo'])) ? 'images/' . $row['photo'] : 'images/noimage.jpg';

		//Echo list product

		echo "<div class='col-md-4 wthree_banner_bottom_left'>
			<div class='wthree_banner_bottom_left_grid'>
				<img src='" . $image . "' class='img-responsive' />
				<div class='wthree_banner_bottom_left_grid_pos'>
					<h4><span>25%</span></h4>
				</div>
				<div class='content-product'>
				<a href='product.php?product=" . $row['slug'] . "'>" . $row['name'] . "</a>
				</div>
				<div class='box-footer text-center'>
					<b>&#36; " . number_format($row['price'], 2) . "</b>
				</div>
			</div>
		</div>";

	} //End foreach
} catch (PDOException $e) {
	echo "There is some problem in connection: " . $e->getMessage();
}
$pdo->close();
?>

		<div class="clearfix"> </div>
	</div>
	<!-- End 3 products hot  -->
	<div class="clearfix"> </div>
</div>