<?php include('header.php') ?>


<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/yellow.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			YOUR FEEDBACK MATTERS!
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
<div class="row">
    <div class="col-md-1"></div>

    <div class="col-md-10">

    <form method="post" action="#">
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" required type="text" name="name" placeholder=" your name.......">
						</div>
                       

                        <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" required type="text" name="city"   placeholder=" your city .....">
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
                        <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="your feedback matter!"></textarea>
						</div>
   


					

						<button type="submit" name="sub" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Submit
						</button>
					</form>
				
    </div>
				
				
				
				
			
            </div>
		</div>
	</section>	
	<?php
include("footer.php");
include('connection.php');
if(isset($_POST['sub'])){
    $u =$_POST['name'];
   
    $c =$_POST['msg'];
    $p =$_POST['city'];
    
$querry = "INSERT INTO `feedback`( `name`, `msg`, `city`) VALUES ('$u','$c','$p')";
$run=mysqli_query($con, $querry);
if($run==true){
    echo "<script> alert('THANK YOU FOR YOU FEEDBACK!'); window.location.href='index.php'</script>";

}
else{
    echo "mysqli_error($con)";
}

}
?>