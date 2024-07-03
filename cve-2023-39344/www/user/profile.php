<!-- drop in and out of the PHP context -->
<?php  
session_start();
if(!isset($_SESSION["id"]))
{
	header("location:../login.html");
}
?> 

<html lang="en-us">

<head>
	<title> profile </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	<meta name="keywords"
		content="social media,the best social media platform,chat with your friend ,easy social media,pipago">
	<meta name="description" content="light weight secured student's social media!!!">
	<meta name="author" content="black eagle team">
	<link rel="stylesheet" href="home.css">
    <script src="home.js"></script>
</head>
<!-- body goes here -->

<body id="body">
	<!--header-->
	<header>
		<!-- -navigation links-->
		<nav>

			<ul>
				<li><a href="home.php" >home</a></li>
				<li><a href="#" style="background-color: black;">profile </a></li>
				<li><a href="#">search </a></li>
				<li><a href="#"> message </a></li>
				<li><a href="#">notification </a></li>
				<li><a href="#">setting</a></li>
				<li><a href="logout.php">logout</a></li>
				<div class="pref"> 
				<li><a href="#">preference </a></li>
				<div class="premenu" id="premenu">
				<input class="tbot" type="button" value="night mode" onclick="gonight()">
				<input class="tbot" type="button" value="cyan" onclick="cyan_theme()">
				<input class="tbot" type="button" value="reset" onclick="reset_theme()">
				</div>
				</div>
			</ul>

		</nav>

<main>

<?php   

if($_SESSION["gender"]=="male")
echo "<img src='../image/male.png' class='avatar'>";
else 
echo "<img src='../image/female.png' class='avatar'>";
echo "<h1 class='dashboard_header'>".$_SESSION['fname']." ".$_SESSION['lname']." <br></h1>";
echo "<p class='profile_text'>birthday : ".$_SESSION['bday']." <br></p>";
echo "<p class='profile_text'>city : ".$_SESSION['city']." <br></p>";
echo "<p class='profile_text'>gender : ".$_SESSION['gender']." <br></p>";
echo "<p class='profile_text'>email : ".$_SESSION['email']." <br></p>";
?>

</main>


	</header>
	<!-- content-->
	<main>


	</main>
	<!--footer content-->
	<footer>


	</footer>
</body>

</html>