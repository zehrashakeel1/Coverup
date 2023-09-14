	<?php include('header.php');
    include('connection.php');
    $i=$_GET['id'];
    $q="select * from covers where id=$i";
    $run1= mysqli_query($con, $q);
    $data=mysqli_fetch_assoc($run1);
    ?>




   <!-- Count of cart -->
   <?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
}
else{
    $cart_count=0 ;
}

?>
    <!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg m-t-85">
			<a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="custom.php" class="stext-109 cl8 hov-cl1 trans-04">
				customize
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="customize.php" class="stext-109 cl8 hov-cl1 trans-04">
				product
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

		</div>
	</div>
		
	<div class="wrap-icon-header flex-w flex-r-m">
						

						<a href="cart.php"><div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti " data-notify=" <?php echo $cart_count ?>">
							<i class="zmdi zmdi-shopping-cart"  style="color:black;" ></i></a>
						</div>

					
					</div>
	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								

								<div class="item-slick3" data-thumb="../admin/<?php echo $data['image']?>">
									<div class="wrap-pic-w pos-relative">
										<img src="../admin/<?php echo $data['image']?>" alt="IMG-PRODUCT">

										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">

					<form method="post" action="c_shop_php.php" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $data['id']?>" />
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
						<?php echo $data['name'] ?>
						</h4>

						<span class="mtext-106 cl2">
                        <?php echo $data['price'] ?>
						</span>

						<p class="stext-102 cl3 p-t-23">
						Personalize your phone's appearance, from wallpapers and themes to cases and accessories, to make it truly yours. <strong>DROP YOUR DESIGN HERE!</strong>						
						<!--  -->
						<div class="p-t-33">
							<div class="flex-w flex-r-m p-b-10">
								

								
							</div>

							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									choose your file
								</div>

								<div class="size-204 respon6-next">
									<div class="rs1-select2 bor8 bg0">
										
										
		<input type="file"   accept="image/png, image/jpg, image/jpeg" onChange="abc(this)" class="form-control" required name="logo" id="exampleInputUsername2"  placeholder=" add image.......">

										<div class="dropDownSelect2"></div>
									</div>
								</div>
							</div>

						

									<button name="submit" type="submit" class="submit  flex-c-m stext-101 cl0 size-101  p-lr-15 btn btn-dark">
										Add to cart
									</button>
								</div>
							</div>	
						</div>
						</form>
						<!--  -->
						<div class="flex-w flex-m p-l-100 p-t-40 respon7">
							
					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
						</li>

					

						
					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
								Elevate your phone's style and protection with our customizable phone cases. Our range of phone cases lets you unleash your creativity, offering a wide array of colors, textures, and designs to ensure your case is as unique as you are. Crafted with precision to fit your device perfectly, our custom phone cases not only add a personal touch but also provide durable protection.
								Customize a phone case for a loved one, offering them a daily reminder of your care and appreciation. Our user-friendly design tool makes the customization process easy, allowing you to experiment with different patterns, photos, and text to create a phone case that truly speaks to you. Say goodbye to generic cases and embrace the freedom to tailor your phone's protection – it's your phone, your style!								</p>
							</div>
						</div>

					
						
					</div>
				</div>
			</div>
		</div>

	
	</section>

    <?php include('footer.php') ?>