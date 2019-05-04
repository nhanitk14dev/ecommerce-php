<?php

foreach ($list_pro_hot as $key => $row) {

	$image = (!empty($row['photo'])) ? 'images/' . $row['photo'] : 'images/noimage.jpg';
	echo "<div class='col-md-3 top_brand_left'>
	<div class='hover14 column'>
		<div class='agile_top_brand_left_grid'>
			<div class='tag'><img src='public/Frontend/images/tag.png' class='img-responsive' /></div>
			<div class='agile_top_brand_left_grid1'>
				<figure>
					<div class='snipcart-item block' >

						<div class='snipcart-thumb'>
							<a href='product.php?product=" . $row['slug'] . "'>
								<img src='" . $image . "' />
							</a>
							<p>'" . $row['name'] . "'</p>
							<h4>" . number_format($row['price'], 2) . "<span>$10.00</span></h4>
						</div>

						<div class='snipcart-details top_brand_home_details'>
							<a href='product.php?product=" . $row['slug'] . "' class='button'> View Detail </a>
							<form action='cart_add.php' method='post' id='productForm' class='hidden'>
								<fieldset>
									<input type='hidden' name='cmd' value='_cart'>
									<input type='hidden' name='add' value='1'>
									<input type='hidden' name='business' value=' '>
									<input type='hidden' name='item_name' value='Fortune Sunflower Oil'>
									<input type='hidden' name='amount' value='7.99'>
									<input type='hidden' name='discount_amount' value='1.00'>
									<input type='hidden' name='currency_code' value='USD'>
									<input type='hidden' name='return' value=' '>
									<input type='hidden' name='cancel_return' value=' '>
									<input type='submit' name='submit' value='Add to cart' class='button'>
								</fieldset>
							</form>
						</div>

					</div>
				</figure>
			</div>
		</div>
	</div>
</div>";

	if ($key == 3) {
		echo "<div class='clearfix'> </div>";
		continue;
	}
}
?>