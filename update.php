<?php 
session_start();
$time=time();
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("Could not connect: ".mysql_error());
}
mysql_select_db("oneskill",$con);
$sql1="UPDATE leaderboard SET end=".$time." where teamname='".$_SESSION['username']."'";
$result1=mysql_query($sql1,$con);
$sql2="UPDATE leaderboard SET  diff=end-start where teamname='".$_SESSION['username']."'";
$result2=mysql_query($sql2,$con);
if (!$result1 || !$result2)
   {
   die('Error: ' . mysql_error());
   }
?>