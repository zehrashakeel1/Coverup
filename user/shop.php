<?php include('header.php') ;
include('connection.php');


@$mob=$_GET['mob_id'];
@$id=$_GET['cat_id'];

if($id!=null){

    $q="SELECT * FROM covers INNER JOIN mobile 
	ON mobile.id=covers.mob_id_fk INNER join company on company.id=mobile.company_id_fk where company.id='$id'"; 

}
else if($mob!=null){

$q="select * from covers where mob_id_fk='$mob'";

}

else{

	$q="select * from covers";

}

if(isset($_POST['abc'])) {
    $var = $_POST['sort'];
    if($var==1){
		$q="SELECT * FROM `covers` ORDER BY `covers`.`id` DESC";
    }
	if($var==2){
		$q="SELECT * FROM `covers` ORDER BY `covers`.`price` ASC";
	  }
	  if($var==3){
		$q="SELECT * FROM `covers` ORDER BY `covers`.`price` DESC";
	  }
}

if(isset($_POST['dev'])){
	$var = $_POST['x'];
	$q="select * from covers where name like '%$var%'";
}

$run1= mysqli_query($con, $q);

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

	
	<!-- Product -->
	<div class="bg0 m-t-85 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				

				<div class="flex-w flex-c-m m-tb-10">
					<div>
					<form method="post" action="#">

						<select class="form-control" name="sort">
						<option data-display="Select"> FILTER</option>

				          <option value=1>Latest</option>
				          <option value=2>Low Price -> High Price</option>
				        <option value=3>High Price -> Low Price</option>

 
					</select>

					</div>

					<div>
					<input type="submit" name="abc" class="btn btn-dark m-l-6 " style="" value="Sort" />
					</form>
					</div>
				</div>
				
				<div class="flex-w flex-c-m m-tb-10">
					<div >
					<form method="post" action="#">

            <input type="text" name="x" class="form-control m-l-10" placeholder="Serach here...."/>
			</div>

<div>
<input type="submit" name="dev" class="btn btn-dark m-l-8 " style="" value="search" />
</form>
</div>
</div>
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
					</div>	
				</div>

			
<!-- cart here -->
									<!-- Icon header -->
						<div class="wrap-icon-header flex-w flex-r-m">
						

						<a href="cart.php"><div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti " data-notify=" <?php echo $cart_count ?>">
							<i class="zmdi zmdi-shopping-cart" style="color:black;" ></i></a>
						</div>

					
					</div>

			</div>

			

			<div class="row isotope-grid">
			<?php while ($data=mysqli_fetch_assoc($run1)){?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">

				<form method="post" action="shop_php.php">
          <input type="hidden" name="id" value="<?php echo $data['id']?>" />
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0" style="height:60vh;width:115%;">
							<img style="height:60vh;width:85%;" src="../admin/<?php echo $data['image']?>" alt="IMG-PRODUCT">

						
							<button type="submit" name="submit" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                            Add to Cart
							</button>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
								<?php echo $data['name'] ?>
								</a>

								<span class="stext-105 cl3">
								RS. <?php echo $data['price'] ?>
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


			</form>
				<?php } ?>
				
			</div>
		

		
		</div>
	</div>

<?php include('footer.php'); ?>