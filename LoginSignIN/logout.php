<!--    //session_start();
    //session_unset();
    //session_destroy();
    //header('location:login.php');
 //  echo"<script>location.href='login.php'</script>";
-->
<?php
   session_start();
   session_unset();
   if(session_destroy()) {
    //   header("location: login.php");
    echo"<script>location.href='login.php'</script>";
   }
?>