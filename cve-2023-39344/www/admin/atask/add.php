
<?php
session_start();
if(!isset($_SESSION["aid"]))
{
	header("location:adminlogin.html");
   exit();
}
$uemail=$_POST["email"];
$upass=$_POST["password"];
//if empty password or username!
//alt isempty
if($uemail=="" || $upass=="")
{
  header("location:add.html");
  exit();
}
require("../../tasks/condb.php");
$query="insert into admin (email,password) values('$uemail','$upass')";
$result=$dbcon->query($query);
      if($result)
      {
          echo("<p style='color:green;position:absolute;left:250px;top:70px'> successfully added $uemail</p>");
         include("add.html");
          $dbcon->close();
          exit();
      }  else {
        echo("some thing want wrong please try again!");
        $dbcon->close();
        include("add.html");
      }



?>
