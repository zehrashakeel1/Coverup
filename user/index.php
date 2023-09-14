<?php include('header.php');
include('connection.php');
$q="select * from covers order by id desc limit 4";
$run4= mysqli_query($con, $q);

$q1="select * from company order by id desc limit 3";
$run1= mysqli_query($con, $q1);


$q2="select * from feedback order by id desc limit 3";
$run2= mysqli_query($con, $q2);
?>

		

	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(images/new1.png);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									<b>Cover Badlo Phone Nahi!</b>
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									Latest Collection
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="shop.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(images/new2.png);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									<b>Protect your phone in style!</b>
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									Trendy & Classic
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="shop.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(images/new3.png);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									<b>Personalize Your Phone Cover<br> To Match Your Unique Style!</b>
								</span>
							</div>
								
							
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="custom.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									 Customize
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- Category top -->
	<!-- Banner -->
	<div class="sec-banner bg0 p-t-80 p-b-50">
		
		<div class="container">
			<div class="row">
			<?php while($com=mysqli_fetch_assoc($run1)) { ?>
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img style="height:50vh;width:100%;" src="../admin/<?php echo $com['company_image'] ?>" alt="IMG-BANNER" >

						<a href="shop.php?cat_id=<?php echo $com['id']?>" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
								<?php echo $com['company_name'] ?>
								</span>

								<span class="block1-info stext-102 trans-04">
									latest 2023
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									view all

									
								</div>
							</div>
						</a>
					</div>
				</div>

				<?php } ?>
			</div>
		
			
		</div>
	</div>

	<!-- Category top -->

	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Latest products
				</h3>
			</div>

			

			<div class="row isotope-grid">
			<?php while($cov=mysqli_fetch_assoc($run4)) { ?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="../admin/<?php echo $cov['image'] ?>" style="height:50vh;width:130%;" alt="IMG-PRODUCT">

							<a href="shop.php" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								VIEW MORE
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
								<?php echo $cov['name'] ?>
								</a>

								<span class="stext-105 cl3">
								<?php echo $cov['price'] ?>
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

			

				<?php } ?>
			
			</div>

		
		</div>
	</section>
	
	<!-- Slider -->
	<section class="section-slide m-b-20" >
		<div class="wrap-slick1 rs2-slick1">
			<div class="slick1" >
			<?php while($fb=mysqli_fetch_assoc($run2)) { ?>
				<div class="item-slick1 bg-overlay1" style="background-image: url(images/new6.jpg);height:60vh;width:100%;" data-thumb="images/thumb-01.jpg" data-caption="Women’s Wear">
					<div class="container h-full">
						<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-202 txt-center cl0 respon2">
								<?php echo $fb['name'] ?>
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h4 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
								<?php echo $fb['msg'] ?>
								</h4>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
							<span class="ltext-202 txt-center cl0 respon2">
								<?php echo $fb['city'] ?>
								</span>
							</div>
						</div>
					</div>
				</div>
<?php } ?>
			</div>

			
		</div>
	</section>
	

<?php include('footer.php') ?>