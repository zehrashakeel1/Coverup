<?php include('header.php');
include('connection.php');




//Removing
if (isset($_POST['remove'])){
    foreach($_SESSION["shopping_cart"] as &$value){
           
              if($value['id'] === $_POST["id"]){
                $key=$value['name'];
                unset($_SESSION["shopping_cart"][$key]);
                echo "<script>alert('Item Removed')</script>";
                if(empty($_SESSION["shopping_cart"]))
                    unset($_SESSION["shopping_cart"]);
                break; // Stop the loop after we've found the product
            
                        }		
                    }
            
    }
    
    
    //Plus
    if (isset($_POST['add_quantity'])){
        foreach($_SESSION["shopping_cart"] as &$value){
          if($value['id'] === $_POST["id"]){
              $value['quantity'] +=1;
              break; // Stop the loop after we've found the product
          }
      }
    }
    
    //Minus
    if (isset($_POST['sub_quantity'])){
     
        foreach($_SESSION["shopping_cart"] as &$value){
            if($value['quantity']>1){
                if($value['id'] === $_POST["id"]){
                    $value['quantity'] -=1;
                    break; // Stop the loop after we've found the product
                }
            }
    
            if($value['quantity']==1){
              if($value['id'] === $_POST["id"]){
                $key=$value['name'];
                unset($_SESSION["shopping_cart"][$key]);
                echo "<script>alert('Item Removed')</script>";
                if(empty($_SESSION["shopping_cart"]))
                    unset($_SESSION["shopping_cart"]);
                break; // Stop the loop after we've found the product
            }
                        }		
                    }
    }
    
    
    

?>
    
	<?php if(!isset( $_SESSION['FRONT'])) {  ?>
    <!-- breadcrumb -->
	<div class="container m-t-85">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="cart.php" class="stext-109 cl8 hov-cl1 trans-04">
				shopping cart
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>
		</div>
	</div>
	<div class="alert alert-danger m-t-80 m-b-80 text-center" role="alert">
<h3>YOU NEED TO <b>LOG-IN</b> FIRST TO PLACE YOUR ORDER!</h3><br><a href="login.php" class=" alert alert-success">LOG IN </a>
</div>
<?php } else { ?>

	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85 m-t-100 m-t-100" method="post" action="#">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">

                        <?php
                       if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>



							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2"></th>
									<th class="column-3">Price</th>
									
                                    <th class="column-5">Quantity</th>
									<th class="column-6">Total</th>
                                    <th class="column-7">Remove</th>

                                 

								</tr>
                                <?php foreach ($_SESSION["shopping_cart"] as $product){ ?>

								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
										<form method='post' action=''>
											<img src="../admin/<?php echo $product["image"]; ?>" alt="IMG">
										</div>
									</td>
									<td class="column-2"><?php echo $product["name"]; ?></td>
									<td class="column-3"><?php echo "RS".$product["price"]; ?></td>
									<td class="column-4">
										<div class="wrap-num-product flex-w m-l-auto m-r-0">

                                      
                                        <input type='hidden' name='id' value="<?php echo $product["id"]; ?>" />
											<button  name="sub_quantity" type="submit" class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
                                </button>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="<?php echo $product["quantity"]; ?>">

											<button  name="add_quantity" type="submit" class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
                                </button>
										
										</div>
									</td>
									
                                    <td class="column-5"><?php echo "RS".$product["price"]*$product["quantity"]; ?> </td>

                                    <td class="column-6">     <!-- Removing -->
                     
                    <input type='hidden' name='id' value="<?php echo $product["id"]; ?>" />

                    <td class="column-7"><button  class="btn btn-danger m-r-20" type='submit' name="remove" >X</a></td>
                    </form>
<!-- Removing -->
                  


                                </tr>
								

                                <?php
$total_price += ($product["price"]*$product["quantity"]);
} //Loop Ended
?>
							</table>
						</div>
						

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
						
						</div>
						</div>
						
				</div>
				

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
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
								<?php echo "RS".$total_price; ?>
								</span>
							</div>
						</div>

					

						

                        <a href="checkout.php?pr=<?php echo $total_price?>" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">Proceed to checkout</a>

					</div>
	<?php } //If Ended
	  else{ ?>


          <div class="alert alert-dark m-t-100 m-b-100 text-center">
			<h3><b>SORRY! </b>your cart is empty!</h3><br>
	  </div>
            
		
		<?php } ?>
 </div>
		</div>
		
		
	
				</div>
          
 
</div>
		

	
</div>

	</form>
	<?php }	?>
    <?php include('footer.php') ;?>