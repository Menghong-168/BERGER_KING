<?php
    include 'config.php';

    if(isset($_POST['update'])){
        $ID = $_POST['Id'];
        $NAME = $_POST['name'];
        $PRICE = $_POST['price'];
        $IMAGE = $_FILES['image'];
        $img_loc = $_FILES['image']['tmp_name'];
        $img_name = $_FILES['image']['name'];
        $img_des = "IMG/".$img_name;
        move_uploaded_file($img_loc,'IMG/'.$img_name);

        mysqli_query($con, "UPDATE `tb_food` SET `Name`='$NAME',`Price`='$PRICE',`Image`='$img_des' WHERE Id = $ID ");
        header('location:index.php');
    }
?>