<?php include('header.php') ?>


<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/yellow.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			UPDATE YOUR ACCOUNT
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
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" required name="username" placeholder=" Add New UserName">
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder=" one number,one uppercase,lowercase letter,at least 8 or more characters">
						</div>

    
   


					

						<button type="submit" name="sub" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Update
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
    $u =$_POST['username'];
   
    
    $p =$_POST['password'];
    
$querry = "UPDATE `user` SET `name`='$u',`password`='$p' where `role_id_fk`='4'";
$run=mysqli_query($con, $querry);
if($run==true){
    echo "<script> alert('your account is successfully updated!'); window.location.href='logout.php'</script>";

}
else{
    echo "mysqli_error($con)";
}

}
?>