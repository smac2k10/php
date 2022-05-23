<?php
include "db.php";
session_start();
$id=$_GET['id'];
$qry="DELETE from userdata where id=$id";
$result=mysqli_query($conn,$qry);
if(isset($_SESSION['username'])){
if($result){
    echo"<script>alert('Data Deleted Successfully!');</script>";
    echo"<script>location.href='View.php'</script>";
}else{
    echo"<script>alert('Error while Data Deletion');</script>";
}
}else{
  echo"<script>location.href='login.php'</script>";
}
?>
