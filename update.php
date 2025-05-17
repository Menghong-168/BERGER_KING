<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BERGER KING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            width: 100%;
            height: 100%;
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-size: cover; 
            background-image: url('../image/berger-king-shop.jpg');
        }
        .main{
            width: 40%;
            height: 70%;
            margin-top: 100px;
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(0, 0, 0, 0.5);
             
        }
        h1{
            color: red;
        }

    </style>
</head>
<body>

<?php

    include 'config.php';
    $ID = $_GET['Id'];
    $Record = mysqli_query($con, "SELECT * FROM `tb_food` WHERE Id = $ID"); 
    $data = mysqli_fetch_array($Record);

?>

        <center>
        <div class="main">
            <h1>UPDATE MENUS</h1>
            <form action="update1.php" method="POST" enctype="multipart/form-data">
                <label for="" class="text-light">Name:</label>
                <input type="text" value="<?php echo $data['Name']?>" name="name" class="form-control"><br>
                <label for="" class="text-light">Price:</label>
                <input type="text" value="<?php echo $data['Price']?>" name="price" class="form-control"><br>
                <label for="" class="text-light">Image:</label>
                <td><input type="file" name="image" value="<?php echo $data['Image']?>" class="form-control"><img src="<?php echo $data['Image']?>" width='200px' height='130px' alt=""></td><br>
                    <input type="hidden" name="Id" value="<?php echo $data['Id']?>"><br>
                <button type="submit" name="update" class="btn btn-success m-2">Update</button>
            </form>
        </div>
    </center>

    

</body>
</html>
