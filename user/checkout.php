<?php include('header.php') ;
include('connection.php');
$p=$_GET['pr'];
?>


    <!-- breadcrumb -->
	<div class="container m-t-85">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				 checkout
			</span>
		</div>
	</div>


    <form class="bg0 p-t-75 p-b-85" method="post" action="#">
		<div class="container">
        <div class="row">


        <div class="col-md-6  m-b-50">
					
                    <form>
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Checkout-Form
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30"  required name="name" type="text"   placeholder="Your  Name Here">
						</div>

                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" required type="text" name="add" placeholder="Your  Address Here">
						</div>

                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" required pattern="^\d{4}-\d{3}-\d{4}$" name="con" type="tel" placeholder="(xxxx-xxx-xxxx)">
						</div>

						

						<button  type="submit" name="sub"class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
						Place Order
						</button>
                       

					




</div>
<div class="col-md-6">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									your total amount:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
								<?php echo "Rs".$p; ?>
								</span>
							</div>
						</div>

					

						</form>


					
				</div>



				
</div>
        </div>

</div>
    </form>

    <?php include('footer.php');


if(isset($_POST['sub'])){
     $p=$_GET['pr'];
$d=date("Y-m-d");
$n =$_POST['name'];
$a =$_POST['add'];
$c =$_POST['con'];
  
$q1="INSERT INTO `orders`(`date`, `name`, `address`, `contact`, `status`,`total_price`) VALUES ('$d','$n','$a','$c','Pending','$p')";

$res1=mysqli_query($con,$q1);
$or=mysqli_insert_id($con);
    foreach($_SESSION["shopping_cart"] as $value){


        $q=$value['quantity'];
        $idd=$value['id'];
		$img=$value['image'];
 $q="INSERT INTO `item`( `order_id_fk`, `cover_id_fk`, `quantity`,`img_user`) VALUES ('$or','$idd','$q','$img')";
  $res=mysqli_query($con,$q);
    }
    unset($_SESSION["shopping_cart"]);
   echo "<script>alert('Your order has been placed!');window.location.href='order_show.php'</script>";

}
?>