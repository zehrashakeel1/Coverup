<?php
##### Add to cart ##### -->
session_start();
include('connection.php');
if (isset($_POST['submit'])){	
    $id = $_POST['id'];
    $q="SELECT * FROM `covers` WHERE `id`='$id'";
    $result = mysqli_query($con,$q);
    $data = mysqli_fetch_assoc($result);
    $name = $data['name'];
    $id = $data['id'];
    $price = $data['price'];
    $image = $data['image'];
    
    $cartArray = array(
        $name=>array(
        'name'=>$name,
        'id'=>$id,
        'price'=>$price,
        'quantity'=>1,
        'image'=>$image)
    );
    
    if(empty($_SESSION["shopping_cart"])) {
        $_SESSION["shopping_cart"] = $cartArray;
        echo "<script>alert('Product is added to your cart!');window.location.href='shop.php'</script>";
    }
    else{
        $array_keys = array_keys($_SESSION["shopping_cart"]);
        if(in_array($name,$array_keys)) {
            foreach($_SESSION["shopping_cart"] as &$value){
                if($value['id'] === $_POST["id"]){
                    $value['quantity'] +=1;
                    echo "<script>alert('Quanity of this product in your cart is".$value['quantity']."');window.location.href='shop.php'</script>";
                    break; // Stop the loop after we've found the product
                }
           
            }
        } 
        else {
        $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
        echo "<script>alert('Product is added to your cart!');window.location.href='shop.php'</script>";
        }
    
        }
    }
    ?>