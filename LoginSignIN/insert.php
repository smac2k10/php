<?php
 include "db.php";
session_start();
 if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $mobile=$_POST["mobile"];
    $email=$_POST["email"];
    $pwd=$_POST["pwd"];
    $qry="INSERT into userdata (name,mobile,email,pwd) values('$name','$mobile','$email','$pwd')";
    $result=mysqli_query($conn,$qry);
    if($result){
     #   echo "Form submitted successfully";
        echo "<script>alert('Form submitted successfully');</script>";
        echo"<script>location.href='view.php'</script>";
    }else{
        echo "Error in Creation";
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Insertion page</title>
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
        <?= $_SESSION['username'];?>
        <h1>User Profile Data</h1>
        <form method="post">
        <label for="">Name: </label>
        <input type="text" name="name" placeholder="Enter your Name" required><br>
        <label for="">Mobile No: </label>
        <input type="text" name="mobile" placeholder="Enter your Mobile" required><br>
        <label for="">Email Id: </label>
        <input type="email" name="email" placeholder="Enter your Email" required><br>
        <label for="">Password: </label>
        <input type="password" name="pwd" placeholder="Enter Your Password" required>
        <button type="submit" name="submit">Submit</button>
    </form>

    <h1>View old data <br><a href="./view.php">Click Here</a></h1>
    <a href="./logout.php">LOGOUT</a>
    <?php
    } else{
        echo"<script>location.href='login.php'</script>";
    }
   ?>
</body>
</html>