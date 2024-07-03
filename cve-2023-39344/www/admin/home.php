<!-- drop in and out of the PHP context -->
<?php  
include("atask/getinfo.php");
session_start();
 if(!isset($_SESSION["aid"]))
 {
	 header("location:adminlogin.html");
	
 }
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
	<link rel="stylesheet" href="home.css">
</head>
<!-- body goes here -->

<body>
	<!--header-->
	<header>
		<!-- -navigation links-->
		<nav>

			<ul>
				<li><a href="#" style="background-color: black;">pipa analytics</a></li>
				<li><a href="mg.php">manage user </a></li>
				<li><a href="atask/add.html"> add admin </a></li>
				<li><a href="atask/setting.php">setting</a></li>
				<li><a href="atask/logout.php">logout</a></li>
			</ul>

		</nav>

	</header>
	<!-- content-->
	<main>
<p class="infos"><?php echo "total users=====>> ".$total_users?></p>
<p class="infos"><?php echo "today's active users=====>> ".$active_today?></p>
<p class="infos"><?php echo "users active with in last hour=====>> ".$active_lh?></p>
<p class="infos"><?php echo "users active with in last minutes=====>> ".$active_lm?></p>
<p class="infos"><?php echo "today's total posts=====>> ".$todaysp?></p>
<p class="infos"><?php echo "today's total message transferred over pipa=====>> ".$todaysm?></p>
<p class="isum"> <?php echo "website usability=====>> ".(($active_today/$total_users)*100).'%'?> </p>	
<!-- insert the animations-->
<div class="pipaAnim"><img src="../image/pipa_anime.png"></div>
<div class="pipacon"><img src="../image/connect.png"></div>
<div class="pedscreen"><p>friendly<br> pipa go</p></div>

	</main>
	<!--footer content-->
	<footer>


	</footer>
</body>

</html>