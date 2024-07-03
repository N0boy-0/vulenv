<?php
include("tasks/condb.php");
//handle the form 
$uemail=$_POST["email"];
$upass=$_POST["password"];
$ufname=$_POST["fname"];
$ulname=$_POST["lname"];
$ugender=$_POST['gender'];
$ubdate=$_POST['bdate'];
$uelevel=$_POST['elevel'];
$ucity=$_POST['city'];

//prevent sql injection here 
$uemail=mysqli_real_escape_string($dbcon,$uemail);
$upass=mysqli_real_escape_string($dbcon,$upass);
$ufname=mysqli_real_escape_string($dbcon,$ufname);
$ulname=mysqli_real_escape_string($dbcon,$ulname);
$ugender=mysqli_real_escape_string($dbcon,$ugender);
$ubdate=mysqli_real_escape_string($dbcon,$ubdate);
$uelevel=mysqli_real_escape_string($dbcon,$uelevel);
$ucity=mysqli_real_escape_string($dbcon,$ucity);


$lseen=date("Y/m/d/H/i/s");
//using mysql now() 2nd alt 
//before inserting check if the email already exist 
$query="select * from users where email='$uemail'";
$result=mysqli_query($dbcon,$query);
//if available 
if($result->num_rows==0)
{
//insert to database.
$query="insert into users (email,password,fname,lname,gender,bday,edu,city,last_seen,joined) values('$uemail','$upass','$ufname','$ulname','$ugender','$ubdate','$uelevel','$ucity','$lseen','$lseen')";
$result=mysqli_query($dbcon,$query);
//if successfully inseerted true 
if($result==true)
{
    echo("you have successfully registered,login now");
    require('login.html');
    exit();

} else {
    echo mysqli_error($dbcon)."<br>";
    die("unknow error occured");
}
}  else {
    echo("<p style='color:red;text-align:center;font-size:20px;'>the email address you inserted is taken </p>");
    require('signup.html');
    exit();
}




?>


