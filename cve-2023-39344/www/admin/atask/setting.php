<!-- drop in and out of the PHP context -->
<?php  
session_start();
if(!isset($_SESSION["aid"]))
{
	header("location:adminlogin.html");
   exit();
}
//connect to the database first!!!!
require('../../tasks/condb.php');
if($_SERVER['REQUEST_METHOD'] == 'POST')
{

	// if the form has been submitted!
	$echanged=false;
	$pchanged=false;
	$gotold=false;
	$putold=false;

	//is email changed 
	if(isset($_POST['email']))
	{
	$echanged=true;
	$newemail=$_POST['email'];
	} 
	//is pass ^^
	if(isset($_POST['password']))
	{
	$pchanged=true;
	$newpass=$_POST['password'];
	} 
	if(isset($_POST['oldpass']))
	{
		$putold=true;
		$oldpass=$_POST['oldpass'];

	}
/*************************************************** */
$id=$_SESSION["aid"];
$q="select * from admin where admin_id=$id";
$result=mysqli_query($dbcon,$q);
$row=$result->fetch_assoc(); 
$rpass=$row["password"];  //real

if($pchanged && $oldpass==$rpass)
{
	//chnge the password 
	$q="update admin set password='$newpass' where admin_id=$id";
	$result=mysqli_query($dbcon,$q);
	if($result)
	{
		echo "changed the password <br>";
	}
}  

if($echanged && $oldpass==$rpass)
{
	$q="update admin set email='$newemail' where admin_id=$id";
	$result=mysqli_query($dbcon,$q);
	if($result)
	{
		echo "changed the email <br>";
	}
}

}
/***************************************************** */

?> 

<html lang="en-us">

<head>
	<title> admin homepage </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	<meta name="keywords"
		content="social media,the best social media platform,chat with your friend ,easy social media,pipago">
	<meta name="description" content="light weight secured student's social media!!!">
	<meta name="author" content="black eagle team">
	<link rel="stylesheet" href="setting.css">
</head>
<!-- body goes here -->

<body>
	<!--header-->
	<header>
		<!-- -navigation links-->
		<nav>

			<ul>
				<li><a href="../home.php">pipa analytics</a></li>
				<li><a href="../mg.php">manage user </a></li>
				<li><a href="add.html"> add admin </a></li>
				<li><a href="#"  style="background-color: black;">setting</a></li>
				<li><a href="logout.php">logout</a></li>
			</ul>

		</nav>

	</header>
	<!-- content-->
	<main>
    <div class="adminsetting">
    <div class="adminsetting1">
		<form action="" method="post">
		<label >email</label><br>
    <input type="email" name="email" required><br>
	<label >new password</label><br>
	<input type="password" name="password" required><br>
	<label >old password</label><br>
	<input type="password" name="oldpass" required title="old password required to save changes" ><br>
	<input type="submit" id="submitb" value="save changes">
</form>
	</div>
	</div>
    
	</main>
	<!--footer content-->
	<footer>


	</footer>
</body>

</html>