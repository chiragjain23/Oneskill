<?php 
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("Could not connect: ".mysql_error());
}
mysql_select_db("oneskill",$con);
$uname=$_POST["uname"];
$password=$_POST["password"];
$sql="SELECT * from team where teamname='".$uname."'";


$result=mysql_query($sql,$con);
if (!$result)
   {
   die('Error: ' . mysql_error());
   }
   else 
   { 
   	 $row = mysql_fetch_array($result);
	 if($password==$row['password'])
		 {
			session_start(); 
			$_SESSION['username']=$row['teamname'];
			$result=mysql_query($sql2,$con);
			header("location:Rules.php");
		 }
		  else
		   { 
		 	header('location:index.php');
			 session_destroy();
	   	   }
	 	 
	}	
	   mysql_close($con);

/*
1. Click an image.  imagemap
2. Change the URL. submit.php
3. reversed file name. Hint in the URL.
*/
?>