<?php  session_start();

include('connection.php');
$q="select * from web_details";
$run1= mysqli_query($con, $q);
$data=mysqli_fetch_assoc($run1);


$q2="SELECT * FROM `mobile` limit 12";
$run2=mysqli_query($con, $q2);



function PageName() {
	return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
  }
  $current_page = PageName();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<body class="animsition">
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
					<?php echo $data['msg'] ?>
					</div> 

					<?php if(isset($_SESSION['FRONT'])) {?>
					<div class="right-top-bar flex-w h-full">

					<a href="login.php" class="flex-c-m trans-04 p-lr-25">
						<?php echo $_SESSION['FRONT']?>
						</a>
					<a href="logout.php" class="flex-c-m trans-04 p-lr-25">
							logout
						</a>
						<a href="acc_update.php" class="flex-c-m trans-04 p-lr-25">
							update your account
						</a>
						<a href="order_show.php" class="flex-c-m trans-04 p-lr-25">
							your orders
						</a>
					 <?PHP } else {?>
					<div class="right-top-bar flex-w h-full">
						

						<a href="login.php" class="flex-c-m trans-04 p-lr-25">
							LOGIN
						</a>

						<a href="register.php" class="flex-c-m trans-04 p-lr-25">
							REGISTER
						</a>
						
						<?php } ?>
						
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="index.php" class="logo">
						<img src="images/final.png" alt="IMG-LOGO" style="height:80%;width:95%;">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="<?php echo $current_page == 'index.php' ? 'active' : NULL ?>">
								<a href="index.php">Home</a>
								
							</li>

							<li class="  <?php echo $current_page == 'shop.php' ? 'active' : NULL ?>">
								<a href="shop.php">Shop</a>
							</li>

							<li >
						
								<a >Category</a>
								<ul class="sub-menu">
								<?php while ($data2=mysqli_fetch_assoc($run2)){?>

								<li  class="<?php echo $current_page == 'shop.php' ? 'active' : NULL ?>"><a href="shop.php?mob_id=<?php echo $data2['id']?>"><?php echo $data2['model']?></a>

								<?php } ?>
								</ul>
								
							</li>
							
							

							<li class="nav-item  <?php echo $current_page == 'about.php' ? 'active' : NULL ?>">
								<a href="about.php">About</a>
							</li>

							<li class="<?php echo $current_page == 'about.php' ? 'active' : NULL ?>">
								<a href="contact_us.php">Contact</a>
							</li>
							<li class="<?php echo $current_page == 'custom.php' ? 'active' : NULL ?>">
								<a href="custom.php">Customize NOW!</a>
							</li>
						</ul>
					</div>	

					
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="images/final.png" class="img-fluid" alt="Responsive image" style="height:90%;width:95%;"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
			

				
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
		<div class="top-mobile">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
					<?php echo $data['msg'] ?>
					</div> 

					<?php if(isset($_SESSION['FRONT'])) {?>
					<div class="right-top-bar flex-w h-full">

					<a href="login.php" class="flex-c-m trans-04 p-lr-25">
						<?php echo $_SESSION['FRONT']?>
						</a>
					<a href="logout.php" class="flex-c-m trans-04 p-lr-25">
							logout
						</a>
						<a href="acc_update.php" class="flex-c-m trans-04 p-lr-25">
							update your account
						</a>
						<a href="order_show.php" class="flex-c-m trans-04 p-lr-25">
							your orders
						</a>
					 <?PHP } else {?>
					<div class="right-top-bar flex-w h-full">
						

						<a href="login.php" class="flex-c-m trans-04 p-lr-25">
							LOGIN
						</a>

						<a href="register.php" class="flex-c-m trans-04 p-lr-25">
							REGISTER
						</a>
						
						<?php } ?>
						
					</div>
				</div>
			</div>

			<ul class="main-menu">
							<li class="<?php echo $current_page == 'index.php' ? 'active' : NULL ?>">
								<a href="index.php">Home</a>
								
							</li>

							<li class="  <?php echo $current_page == 'shop.php' ? 'active' : NULL ?>">
								<a href="shop.php">Shop</a>
							</li>

							<li >
						
								<a >Category</a>
								<ul class="sub-menu">
								<?php while ($data2=mysqli_fetch_assoc($run2)){?>

								<li  class="<?php echo $current_page == 'shop.php' ? 'active' : NULL ?>"><a href="shop.php?mob_id=<?php echo $data2['id']?>"><?php echo $data2['model']?></a>

								<?php } ?>
								</ul>
								
							</li>
							
							

							<li class="nav-item  <?php echo $current_page == 'about.php' ? 'active' : NULL ?>">
								<a href="about.php">About</a>
							</li>

							<li class="<?php echo $current_page == 'about.php' ? 'active' : NULL ?>">
								<a href="contact_us.php">Contact</a>
							</li>
							<li class="<?php echo $current_page == 'custom.php' ? 'active' : NULL ?>">
								<a href="custom.php">Customize NOW!</a>
							</li>
						</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-01.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								White Shirt Pleat
							</a>

							<span class="header-cart-item-info">
								1 x $19.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-02.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Converse All Star
							</a>

							<span class="header-cart-item-info">
								1 x $39.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-03.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Nixon Porter Leather
							</a>

							<span class="header-cart-item-info">
								1 x $17.00
							</span>
						</div>
					</li>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $75.00
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>