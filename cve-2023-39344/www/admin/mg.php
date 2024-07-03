<!-- drop in and out of the PHP context -->
<!--
<?php 
//switching to the html
?> 

-->

<?php
session_start();
if(!isset($_SESSION["aid"]))
{
	header("location:adminlogin.html");
   exit();
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
                <li><a href="home.php">pipa analytics</a></li>
                <li><a href="#" style="background-color: black;">manage user </a></li>
                <li><a href="atask/add.html"> add admin </a></li>
                <li><a href="atask/setting.php">setting</a></li>
                <li><a href="atask/logout.php">logout</a></li>
            </ul>

        </nav>

    </header>
    <!-- content-->
    <main>


    </main>
    <!--footer content-->
    <footer>


    </footer>
</body>

</html>