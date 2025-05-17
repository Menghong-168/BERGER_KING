<?php
include 'config.php';

if(isset($_POST['upload'])){
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "IMG/".$img_name;
    move_uploaded_file($img_loc,'IMG/'.$img_name);

   mysqli_query($con, "INSERT INTO `tb_food`(`Name`, `Price`, `Image`) VALUES ('$NAME','$PRICE','$img_des')");
   header('location:index.php');
}

?>