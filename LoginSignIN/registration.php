<?php
   include("db.php");
   session_start();
   
//    echo "hi"; exit();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
       
      $username = mysqli_real_escape_string($conn,$_POST['username']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
     #$sql = "SELECT id FROM userdb WHERE username = '$username' and password = '$password'";
      $sql = "SELECT * FROM userdb WHERE username = '$username'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     # $active = $row['active'];
      $count = mysqli_num_rows($result);
      //echo $count;exit();
      if($count == 1) {
        
      //echo "Already Registered! Try To login";
     echo "<script>alert('Already Registered! Try To login');</script>";
     //$_SESSION['registered'] = 1;
    // header("location: userlogin.php");
    echo"<script>location.href='login.php'</script>";
      }else {
        $qry="INSERT into userdb (username,password) values('$username','$password')";
        mysqli_query($conn,$qry);
        echo"<script>alert('Registration Successfull! Try To login');</script>";
        echo"<script>location.href='login.php'</script>";

      }
    }
?>