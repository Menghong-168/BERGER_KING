<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BERGER KING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
    <style>
        .title-nav{
            font-size: 50px;
            font-weight: bold;
            font-family: Georgia, 'Times New Roman', Times, serif;
            background: linear-gradient(red,red,orange,yellow);
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .title-nav2{
            font-size: 15px;
            line-height: 15px;
            font-family: Khmer;
            margin-bottom: 45px;
        }
        .about-me:hover{
            text-decoration: underline;
            cursor: pointer;
            font-size: 20px;
        }
     
    </style>
<body>

<div class="title-nav" style="margin-left: 320px">
    BERGER KING
</div>
<div class="title-nav2" style="margin-left: 320px">
    <p>
        Juicy, cheesy, smoky, and perfectly grilled — hamburgers are <br>
        a mouthwatering delight that satisfies cravings and brings pure, delicious happiness.
    </p>
<!-- -----------------------------------------(about me)--------------------------------------------- -->
    
<div class="about-me text-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><h5> about me</h5></div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h1 id="offcanvasRightLabel"><font color="blue">About me</font></h1>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p align="center" style="font-size: 20px; font-family: Khmer; line-height: 25px;">
      <font color="red">>> </font>Hello Teacher and everyone!! I am <b>Kim Menghong.</b>
      I am a M1 (years 3) junior student at <b> Royal University of Phnom Penh</b>,
      majoring in Computer Science. I have a passion for Web development and enjoy creating user-friendly applications. <br><br>
      <font color="red">>> </font>This project, I developed a PHP CRUD project using MySQL focused on <b> BERGER KING system</b>, allowing users to easily add, edit, and delete products.
      This project demonstrates my ability in database design and backend development. <br><br>
      <font color="red">>> </font>It is a practical application of the theoretical knowledge I have learned, aimed at creating an efficient and user-friendly data management system. This project represents an important first step for me in developing real-world applications for commercial use.

    </p>
  </div>
</div>

</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 320px">
  +Add New Menu
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLabel">+ ADD NEW MENU</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <center>
                <div class="main">
                    <form action="insert.php" method="POST" enctype="multipart/form-data">
                        <label for="">Name:</label>
                        <input type="text" name="name" class="form-control">
                        <label for="">Price:</label>
                        <input type="text" name="price" class="form-control">
                        <label for="">Image:</label>
                        <input type="file" name="image" class="form-control"><br>
                        <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn btn-danger m-3">Close</button>
                        <button type="submit" name="upload" class="btn btn-success">Upload</button>
                    </form>
                </div>
            </center>
      </div>
    </div>
  </div>
</div>

<!-- table -->
<div class="container" style="width: 60%;">

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">PRICE</th>
      <th scope="col">IMAGE</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
    <?php
        include 'config.php';
        $pic = mysqli_query($con, "SELECT * FROM `tb_food` ");
        while($row = mysqli_fetch_array($pic)){
            echo"
               <tr>
                    <td>$row[Id]</td>
                    <td>$row[Name]</td>
                    <td>$row[Price]</td>
                    <td><img src='$row[Image]' width='150px' height='110px'></td>
                    <td><a href='delete.php? Id= $row[Id]' class='btn btn-danger'>Delete</a></td>
                    <td><a href='update.php? Id= $row[Id]' class='btn btn-success'>Update</a></td>
               </tr>
            ";
        }
    ?>

  </tbody>
</table>

</div>

</body>
</html>