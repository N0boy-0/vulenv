<?php
require("../tasks/condb.php");
//get basic infos 
//get date and yesterday date 
$newdate=new DateTime('now');
$formated=$newdate->format("Y/m/d/H/i/s");
//echo $formated."<br>";
//current day -1 
$lastday=date("Y/m/d/H/i/s",strtotime("-1 days"));
//echo $lastday."<br>";
//last hour-seconds 
$lasthour=date("Y/m/d/H/i/s",strtotime("-1 hour"));
//echo $lasthour."<br>";
$lastminute=date("Y/m/d/H/i/s",strtotime("-1 minutes"));
//echo $lastminute."<br>";
/************************************************ */
// last seen querys 
$alastday="select count(*) as active_today from users where last_seen > '$lastday'";
$alasthour="select count(*) as active_lh from users where last_seen > '$lasthour'";
$alastminute="select count(*) as active_lm from users where last_seen > '$lastminute'";
//total users 
$totalquery="select count(*) as total_users from users";
//todays post
$todayp="select count(*) as todaysp from post where date > '$lastday'";
//total message transferred over the network todays 
$todaym="select count(*) as todaysm from mesg where date > '$lastday'";
/******************************************************** */
//fetch from the database and store the result in var
$result=mysqli_query($dbcon,$totalquery);
$row=$result->fetch_assoc();
$total_users=$row['total_users'];
//-------------------
$result=mysqli_query($dbcon,$alastday);
$row=$result->fetch_assoc();
$active_today=$row['active_today'];
//-------------------
$result=mysqli_query($dbcon,$alasthour);
$row=$result->fetch_assoc();
$active_lh=$row['active_lh'];
//-------------------
$result=mysqli_query($dbcon,$alastminute);
$row=$result->fetch_assoc();
$active_lm=$row['active_lm'];
//-------------------
$result=mysqli_query($dbcon,$todayp);
$row=$result->fetch_assoc();
$todaysp=$row['todaysp'];
//-------------------
$result=mysqli_query($dbcon,$todaym);
$row=$result->fetch_assoc();
$todaysm=$row['todaysm'];
//-------------------
$dbcon->close();
?>