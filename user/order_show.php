<?php include('header.php');
include('connection.php');
$query1="select * from orders where status='Pending'";
$run1=mysqli_query($con,$query1);

$query2="select * from orders where status!='Pending'";
$run2=mysqli_query($con,$query2);?>


  <!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/yellow.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
		Your Orders!
		</h2>
	</section>	

    <h2 class="ltext-105 cl0 txt-center m-t-20" style="color:black;">
	 <u>PENDING ORDERS</u>
		</h2>
	<!-- Content page -->
    <?php if(mysqli_num_rows($run1)!=0) {?>

	<section class="bg0 p-t-104 p-b-116">
		<div class="container">

        <div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>ADDRESS</th>
                                    <th>CONTACT</th>
                                    <th>TOTAL-PRICE</th>
                                    <th>ORDER-DATE</th>
                                    <th>STATUS</th>
                                     
                                 
                                </tr>
                            </thead>
                            <tbody>
                            <?php while($data=mysqli_fetch_assoc($run1)) { ?>
                                <tr>
                                   
                                    <td><?php echo $data['name']?></td>
                                    <td><?php echo $data['address']?></td>
                                    <td><?php echo $data['contact']?></td>
                                    <td><?php echo $data['total_price']?></td>
                                    <td><?php echo $data['date']?></td>
                                    <td><?php echo $data['status']?></td>

                                
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

		</div>
	</section>	
    <?php } else { ?>

        <div class="alert alert-danger txt-center m-t-40 m-b-40">
  <strong>YOU HAVE NO PENDING ORDERS!!</strong> 
</div>
      

        <?php } ?>
        <h2 class="ltext-105 cl0 txt-center" style="color:black;">
<u>OTHER ORDERS </u>
		</h2>
        <section class="bg0 p-t-104 p-b-116">
		<div class="container">
        <div class="">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th>NAME</th>
                                    <th>ADDRESS</th>
                                    <th>CONTACT</th>
                                    <th>TOTAL-PRICE</th>
                                    <th>ORDER-DATE</th>
                                    <th>STATUS</th>
                                 
                                </tr>
                            </thead>
                            <tbody>
                            <?php while($data=mysqli_fetch_assoc($run2)) { ?>
                                <tr>
                                   
                                    <td><?php echo $data['name']?></td>
                                    <td><?php echo $data['address']?></td>
                                    <td><?php echo $data['contact']?></td>
                                    <td><?php echo $data['total_price']?></td>
                                    <td><?php echo $data['date']?></td>
                                    <td><?php echo $data['status']?></td>

                                
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
    </div>
    </section>

<?php
include("footer.php");


?>