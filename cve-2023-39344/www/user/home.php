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
	<title> home page </title>
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
				<li><a href="#" style="background-color: black;">home</a></li>
				<li><a href="profile.php">profile </a></li>
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

echo "<h1 class='dashboard_header'>".$_SESSION['fname']." ".$_SESSION['lname']." </h1>";
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