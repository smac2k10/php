<?php
include "db.php";
session_start();
$qry="SELECT * from userdata";
$result=mysqli_query($conn,$qry);
$id=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User View Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
    <?php
        if(isset( $_SESSION['username'])){
            ?>
            <h2>Welcome to Homepage  </h2>
           <?= $_SESSION['username'];?>
            <h3>To Insert New Data <a href="insert.php"> Click Here</a></h3><br>
            <a href="./logout.php">LOGOUT</a>
    
        <h1 style="text-align:center">Your created Data</h1>
        <table class='table table-bordered'>
        <thead>
        <th>Emp</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
        </thead>
        <tbody>
        <?php
        while($row=mysqli_fetch_assoc($result)){?>
        <tr>
        <td><?=$id?></td>
        <td><?=$row['name']?></td>
        <td><?=$row['mobile']?></td>
        <td><?=$row['email']?></td>
        <td><?=$row['pwd']?></td>
        <td>
        <?php    
            $passid=$row['id'];
            $encrypt_1=(($passid*56789*98569)/45623);
            $link="update.php?id=".urlencode(base64_encode($encrypt_1));
        ?>
            <!-- <a href="./update.php?id=<?=$row['id']?>;">Update</a> -->
            <a href="<?=$link;?>">Update</a>
            <a href="./delete.php?id=<?=$row['id']?>;">Delete</a>
        </td>
        </tr>
        <?php
        $id++;
        }
        ?>
         </tbody>
        </table>
    <?php
    } else{
        echo"<script>location.href='login.php'</script>";
    }
   ?>
    </div>
</body>
</html>

