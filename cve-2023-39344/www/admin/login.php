<?php
include("../tasks/condb.php");
//handle the form 
$uemail=$_POST["email"];
$upass=$_POST["password"];

//query on database.
$query="select * from admin where email='$uemail' and password='$upass'";
$result=mysqli_query($dbcon,$query);

//check if there is a match 
if($result->num_rows>0)
{
  $rows=$result->fetch_assoc();
  $id=$rows["admin_id"];
  session_start();
  $_SESSION["aid"]=$id;
  $dbcon->close();
 header("location:home.php");
    exit;
}  else {
  $dbcon->close();
    echo "<p style='color:red;text-align:center;font-size:20px;position: absolute;left:700px;top:250px;'> incorrect password or email  </p>";
   require('adminlogin.html');
    exit();
}

?>


