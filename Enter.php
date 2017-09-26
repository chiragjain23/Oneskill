
<?php 
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("Could not connect: ".mysql_error());
}
mysql_select_db("oneskill",$con);
$sql="INSERT INTO team(teamname,branch,year,password) VALUES ('$_POST[uname]','$_POST[branch]','$_POST[year]','$_POST[pwd]')";
if (!mysql_query($sql,$con))
   {
   die('Error: ' . mysql_error());
   }
   else 
   { header('location:index.php'); } 
 mysql_close($con);
?>