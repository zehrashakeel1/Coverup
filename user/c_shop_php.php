<?php
##### Add to cart ##### -->
session_start();
include('connection.php');
if (isset($_POST['submit'])){
    ##### img insert ##### -->

$name=$_FILES['logo']['name'];         //original name
$tname=$_FILES['logo']['tmp_name'];  //temp name
$type=$_FILES['logo']['type'];  //type
$size=$_FILES['logo']['size'];  //size
$folder="DB_images/pics/";
    

if($type=="image/png" || $type=="image/jpg" || $type=="image/jpeg"){
	$path=$folder.$name;
 
}
      ##### img insert end ##### -->

    $id = $_POST['id'];
    $q="SELECT * FROM `covers` WHERE `id`='$id'";
    $result = mysqli_query($con,$q);
    $data = mysqli_fetch_assoc($result);
    $name = $data['name'];
    $id = $data['id'];
    $price = $data['price']+300;
    $image = $data['image'];
    
    $cartArray = array(
        $name=>array(
        'name'=>$name,
        'id'=>$id,
        'price'=>$price,
        'quantity'=>1,
        'image'=>$path)
    );

    if(empty($_SESSION["shopping_cart"])) {
        $_SESSION["shopping_cart"] = $cartArray;
        echo "<script>alert('Product is added to your cart!');window.location.href='custom.php'</script>";
    }
    else{
        $array_keys = array_keys($_SESSION["shopping_cart"]);
        if(in_array($name,$array_keys)) {
            foreach($_SESSION["shopping_cart"] as &$value){
                if($value['id'] === $_POST["id"]){
                    $value['quantity'] +=1;
                    echo "<script>alert('Quanity of this product in your cart is".$value['quantity']."');window.location.href='custom.php'</script>";
                    break; // Stop the loop after we've found the product
                }
           
            }
        } 
        else {
        $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
        echo "<script>alert('Product is added to your cart!');window.location.href='custom.php'</script>";
        }
    
        }
    }
    ?>