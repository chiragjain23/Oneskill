<?php 
session_start();
if(isset($_SESSION['username']))
{
$time=time();
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("Could not connect: ".mysql_error());
}
mysql_select_db("oneskill",$con);
$sql="SELECT qno from leaderboard where teamname='".$_SESSION['username']."'";

$result=mysql_query($sql,$con);
$row=mysql_fetch_array($result);
	if((int)$row['qno']!=0)
	{ 
		$sql="Select filename from solans where qno=".$row['qno']."";
		$result=mysql_query($sql,$con);
		$row1=mysql_fetch_array($result);
	 	if(!$result)
		 {
			die('Error:'.mysql_error());
		 }
		else
		 {
			header('location:'.$row1['filename'].'.php');
		 }
	}
	else 
			{
				mysql_select_db("oneskill",$con);
				$sql="UPDATE leaderboard SET start=".$time.",qno=".(1)." where teamname='".$_SESSION['username']."'";

				$result=mysql_query($sql,$con);
				if (!$result)
				   {
					   die('Error: ' . mysql_error());
   				   }
				   else { header('location:esrever.php');}
	
				    mysql_close($con); 
		   }
}
?>