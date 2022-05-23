<?php
 include "db.php";
session_start();
// To get data from database
#$id=$_GET['id'];


foreach($_GET as $key=>$id){
    $id2=$_GET[$key]=base64_decode((urldecode($id)));
    $session_id=((($id2*45623)/98569)/56789);
}

$result = mysqli_query($conn, "SELECT * FROM userdata WHERE id=$session_id");

while($row= mysqli_fetch_array($result))
{
    $id = $row['id'];
	$name = $row['name'];
	$mobile = $row['mobile'];
	$email = $row['email'];
    $pwd= $row['pwd'];
}
?>

<!-- Update data in database -->
<?php
include "db.php";

if(isset($_POST['update']))
{	
$name =$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$qry="UPDATE userdata SET name='$name',mobile='$mobile',email='$email',pwd='$pwd' WHERE id='$id'";
$result=mysqli_query($conn,$qry);
    if($result){
        echo "<script>alert('Data Updated Successfully');</script>";
        echo"<script>location.href='view.php'</script>";
    }else{
        #echo "Error in Updation";
        die('Could not update data:');
    }
 }
?>
<!DOCYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
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
        <h1>Update Profile Data</h1>
        <form method="post">
        <label for="">ID: </label>
        <input type="text" name="id" value="<?=$id;?>" readonly required><br>
        <label for="">Name: </label>
        <input type="text" name="name" value="<?=$name;?>" placeholder="Enter your Name" required><br>
        <label for="">Mobile No: </label>
        <input type="text" name="mobile" value="<?=$mobile;?>" placeholder="Enter your Mobile" required><br>
        <label for="">Email Id: </label>
        <input type="email" name="email" value="<?=$email;?>" placeholder="Enter your Email" required><br>
        <label for="">Password: </label>
        <input type="password" name="pwd" value="<?=$pwd;?>" placeholder="Enter Your Password" required>
        <button type="submit" name="update">Update</button>
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
