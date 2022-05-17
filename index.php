<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./public/css/carouseller.css">
	<link rel="stylesheet" type="text/css" href="./public/css/fonts.css">
	<link rel="stylesheet" type="text/css" href="./public/css/style.css">
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="./public/js/carouseller.js"></script>
	<script src="./public/js/jquery.easing.1.3.js"></script>
</head>
<body>
	<?php require_once './inc/header.php' ?>
	<section id="product-slide" class="carouseller"> 
		<a href="javascript:void(0)" class="carouseller__left">‹</a> 
		<div class="carouseller__wrap"> 
			<div class="carouseller__list"> 
				<div class="car__12">
					<section class="background-slide" style="background: #9ccd8d;"></section>
					<section class="wrap-slide">
						<section class="slide-left">
							<section class="product-name">
								<span>Will</span><span>Helm</span><span class="last-span">Winter</span>
								<section class="clear-both"></section>
							</section>
							<section class="wrap-button">
								<section class="left-buy-button"></section>
								<section class="content-buy-button"><section class="product-price">1.500.000 đ</section><a href="#">Mua ngay</a></section>
								<section class="right-buy-button"></section>
								<section class="clear-both"></section>
							</section>
						</section>
						<section class="slide-right">
							<img src="images/shoes-1.png" />
						</section>
					</section>
				</div>
				<div class="car__12">
					<section class="background-slide" style="background: #6898ef;"></section>
					<section class="wrap-slide">
						<section class="slide-left">
							<section class="product-name">
								<span>Will</span><span>Helm</span><span class="last-span">Winter 2</span>
								<section class="clear-both"></section>
							</section>
							<section class="wrap-button">
								<section class="left-buy-button"></section>
								<section class="content-buy-button"><section class="product-price">1.250.000 đ</section><a href="#">Mua ngay</a></section>
								<section class="right-buy-button"></section>
								<section class="clear-both"></section>
							</section>
						</section>
						<section class="slide-right">
							<img src="images/shoes-2.png" />
						</section>
					</section>
				</div>
			</div>
		</div>
		<a href="javascript:void(0)" class="carouseller__right">›</a>
	</section>
	<section id="hot-categories">
		<section class="container">
			<section id="wrap-categories">
				<section class="category">
					<h3>Nữ</h3>
					<section class="category-image">
						<img src="images/woman.jpg" />
					</section>
					<section class="total-product">Tổng</section>
					<section class="number-product">357 sản phẩm</section>
					<img src="images/product-list-icon.png" />
				</section>
				<section class="category center-block">
					<h3>Nam</h3>
					<section class="category-image">
						<img src="images/men.jpg" />
					</section>
					<section class="total-product">Tổng</section>
					<section class="number-product">125 sản phẩm</section>
					<img src="images/product-list-icon.png" />
				</section>
				<section class="category">
					<h3>Trẻ em</h3>
					<section class="category-image">
						<img src="images/kids.jpg" />
					</section>
					<section class="total-product">Tổng</section>
					<section class="number-product">251 sản phẩm</section>
					<img src="./public/images/product-list-icon.png" />
				</section>
				<section class="clear-both"></section>
			</section>
		</section>
	</section>
	<section id="hot-products">
		<section class="container">
			<section class="heading-title">
				<h2>Sản phẩm <span>hot</span></h2>
				<a href="#"><img src="./public/images/arrow.png" />Xem tất cả</a>
				<section class="clear-both"></section>
			</section>
			<section class="box-content">
				<section class="product-item first-line">
					<section class="brand-icon"><img src="images/nike-icon.png" /></section>
					<section class="product-image"><img src="images/shoes-item.jpg" /></section>
					<section class="product-name">Giày bóng đá NIKE</section>
					<section class="wrap-button">
						<section class="left-buy-button"></section>
						<section class="content-buy-button"><section class="product-price">1.500.000 đ</section><a href="#">Mua ngay</a></section>
						<section class="right-buy-button"></section>
						<section class="clear-both"></section>
					</section>
				</section>
				<section class="product-item">
					<section class="brand-icon"><img src="images/camper-icon.png" /></section>
					<section class="product-image"><img src="images/shoes-item-2.jpg" /></section>
					<section class="product-name">Converse  Toddler Boy's Athletic Shoe</section>
					<section class="wrap-button">
						<section class="left-buy-button"></section>
						<section class="content-buy-button"><section class="product-price">1.220.000 đ</section><a href="#">Mua ngay</a></section>
						<section class="right-buy-button"></section>
						<section class="clear-both"></section>
					</section>
				</section>
				<section class="product-item">
					<section class="brand-icon"><img src="images/new-balance-icon.png" /></section>
					<section class="product-image"><img src="images/shoes-item-3.jpg" /></section>
					<section class="product-name">Giày bóng đá NIKE</section>
					<section class="wrap-button">
						<section class="left-buy-button"></section>
						<section class="content-buy-button"><section class="product-price">1.100.000 đ</section><a href="#">Mua ngay</a></section>
						<section class="right-buy-button"></section>
						<section class="clear-both"></section>
					</section>
				</section>
				<section class="product-item">
					<section class="brand-icon"><img src="images/nike-icon.png" /></section>
					<section class="product-image"><img src="images/shoes-item.jpg" /></section>
					<section class="product-name">Giày bóng đá NIKE</section>
					<section class="wrap-button">
						<section class="left-buy-button"></section>
						<section class="content-buy-button"><section class="product-price">1.000.000 đ</section><a href="#">Mua ngay</a></section>
						<section class="right-buy-button"></section>
						<section class="clear-both"></section>
					</section>
				</section>
				<section class="product-item first-line">
					<section class="brand-icon"><img src="images/new-balance-icon.png" /></section>
					<section class="product-image"><img src="images/shoes-item-3.jpg" /></section>
					<section class="product-name">Giày bóng đá NIKE</section>
					<section class="wrap-button">
						<section class="left-buy-button"></section>
						<section class="content-buy-button"><section class="product-price">1.300.000 đ</section><a href="#">Mua ngay</a></section>
						<section class="right-buy-button"></section>
						<section class="clear-both"></section>
					</section>
				</section>
				<section class="product-item">
					<section class="brand-icon"><img src="images/camper-icon.png" /></section>
					<section class="product-image"><img src="images/shoes-item-2.jpg" /></section>
					<section class="product-name">Giày bóng đá NIKE</section>
					<section class="wrap-button">
						<section class="left-buy-button"></section>
						<section class="content-buy-button"><section class="product-price">1.200.000 đ</section><a href="#">Mua ngay</a></section>
						<section class="right-buy-button"></section>
						<section class="clear-both"></section>
					</section>
				</section>
				<section class="product-item">
					<section class="brand-icon"><img src="images/new-balance-icon.png" /></section>
					<section class="product-image"><img src="images/shoes-item-3.jpg" /></section>
					<section class="product-name">Giày bóng đá NIKE</section>
					<section class="wrap-button">
						<section class="left-buy-button"></section>
						<section class="content-buy-button"><section class="product-price">1.100.000 đ</section><a href="#">Mua ngay</a></section>
						<section class="right-buy-button"></section>
						<section class="clear-both"></section>
					</section>
				</section>
				<section class="product-item">
					<section class="brand-icon"><img src="images/nike-icon.png" /></section>
					<section class="product-image"><img src="images/shoes-item.jpg" /></section>
					<section class="product-name">Giày bóng đá NIKE</section>
					<section class="wrap-button">
						<section class="left-buy-button"></section>
						<section class="content-buy-button"><section class="product-price">1.100.000 đ</section><a href="#">Mua ngay</a></section>
						<section class="right-buy-button"></section>
						<section class="clear-both"></section>
					</section>
				</section>
				<section class="clear-both"></section>
			</section>
		</section>
	</section>
	<?php require_once './inc/footer.php' ?>
	<script type="text/javascript">
		$(function() {
			$('#product-slide').carouseller();
		});
	</script>
</body>
</html>
