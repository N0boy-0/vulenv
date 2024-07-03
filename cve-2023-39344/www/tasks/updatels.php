<?php 
require('condb.php');
$postede=$_GET['email'];
//get id from the url sent to this page 
//updatels.php?email=test@gmail.com
$search="select * from users where email='$postede'";
$result=$dbcon->query($search);
//for debugging only not for users message 
if($result)
{
  //  echo("successfully parsed id");
   
}  else {
 /// echo("can't parse id");
  ///echo mysqli_error($dbcon);
  
}
//find id 
$row=$result->fetch_assoc();
$uid=$row['id'];
//update user last seen when ever user moves nevigate from one page to another 
//get id from the url sent to this page 
//updatels.php?uid=10000
$ls= date('Y/m/d/H/i/s');
$search="update users set last_seen='$ls' where id=$uid";
$result=$dbcon->query($search);
//for debugging only not for users message 
if($result)
{
   // echo("successfully updated");
   
}  else {
 // echo("can't update ");
 // echo mysqli_error($dbcon);
  
}

$dbcon->close();


?>