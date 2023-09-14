<?php include('header.php');
include('connection.php');
$q="select * from web_details";
$r= mysqli_query($con, $q);
$data=mysqli_fetch_assoc($r); ?>


	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/yellow.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Contact Us
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form action="#" method="post">
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Send Us A Message
						</h4>
                        <label for=""> Name</label>
						<div class="bor8 m-b-20 how-pos4-parent">
                           
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="naam" placeholder="Your Name Here">

                        </div>
                        <label for=""> Email</label>
                        <div class="bor8 m-b-20 how-pos4-parent">
                         
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="email" placeholder="Your Email Address">
						</div>

						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="How Can We Help?"></textarea>
						</div>

						<button type="submit" name="sub" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Submit
						</button>
					</form>
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-cart"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
							BUY NOW!
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
							<?php echo $data['msg'] ?>
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Lets Talk
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
							<?php echo $data['number'] ?>
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							
						</span>

						<div class="size-212 p-t-2">
							

							<p class="stext-115 cl1 size-213 p-t-18">
							<?php echo $data['slogan'] ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
    
    <?php include('footer.php');
if(isset($_POST['sub'])){
    include('connection.php');
    $n=$_POST['naam'];
    $e=$_POST['email'];
    $m=$_POST['msg'];
    
    $query="INSERT INTO `contact_us`(`name`, `email`, `message`) VALUES ('$n','$e','$m')";
    $result=mysqli_query($con,$query);
    if($result){
        echo "<script>alert('Your message is sent!');window.location.href='contact_us.php'</script>";
    }
    else{
        echo mysqli_error($con);
    }
    }
?>
