<?php
   include("db.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = mysqli_real_escape_string($conn,$_POST['username']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM userdb WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      #$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      // echo $count;
      // exit();
     // echo "hi"; exit();
     if($count == "1"){
         $_SESSION['username'] = $username;
         //header("location: home.php");
         echo"<script>location.href='view.php'</script>";
      }else {
        // echo "hello"; exit();
        // $error = "Your Login Name or Password is invalid";
         //echo $error;
         echo "<script>alert('Username or Password is invalid. Try Again');</script>";
         //header("location: login.php");
         echo"<script>location.href='login.php'</script>";
      }
   }
?>
















<!-- 
  $username = "";
  $password = "";
  $errors = array();
   if(isset($_POST['submit']))
  {
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);

      if(count($errors) == 0)
      {
          $query = "SELECT * FROM userdb WHERE username='$username' ";
          $results = mysqli_query($conn, $query);
          if(mysqli_num_rows($results) == 1)
          {
              $row=mysqli_fetch_assoc($results);
              if(password_verify($password, $row['password']))
              {
                 $_SESSION['username'] = $username;
                 header('location:home.php');
              }
              else
              {
                 array_push($errors, "Wrong username/password combination.");
              }
          }
      }
  }
?>   

 -->





<!-- // if($count == "1") 
      // echo "hi"; exit();
      //    $_SESSION['username'] = $username;
      //    header("location: home.php");
      // }else {
      //    echo "hello"; exit();
      //    $error = "Your Login Name or Password is invalid";
      //    echo $error;
      // } -->
<!-- if($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = mysqli_real_escape_string($conn,$_POST['username']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM userdb WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      #$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      // echo $count;
      // exit();
      if($count > 1) { //send email to sysadmin that my site has been hacked }
      }else if ($count = 0) { 
         echo "wrong username or password";
      }else { 
         $_SESSION['username'] = $username;
         header("location: home.php");
      }
       -->