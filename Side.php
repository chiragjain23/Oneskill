<?php 
session_start();
if(isset($_SESSION['username']))
{
	$con=mysql_connect("localhost","root","chirag");
if(!$con)
{
	die("Could not connect: ".mysql_error());
}
mysql_select_db("kec",$con);
$sql="SELECT Ccat,Cques,ques from leaderboard where username='".$_SESSION['username']."'";
$result=mysql_query($sql,$con);
$row=mysql_fetch_array($result);
if($row['ques']<5)
{
	$sql="Select filename from solans where qno=".$row['Cques']." and cat=".$row['Ccat'];
	$result=mysql_query($sql,$con);
	$row1=mysql_fetch_array($result);
	if(!$result)
	{
		die('Error:'.mysql_error());
	}
	else {
	header('location:'.$row1['filename'].'.php');
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Whose Side Are You ON</title>
<style type="text/css">
body {
		background-attachment:fixed;
		min-width:960px;
		min-height:650px;
		background-color:#000;
}
#path {
			position:fixed;
			top:570px;
			left:150px;
			height:50px;
			width:960px;
}
.sides {
			font-family:'BREAK';
			font-size:50px;
			color:#FFF;
}
#photo {
		position:fixed;
		top:180px;
		left:250px;
}
</style>
</head>

<body>
<div id="header" style="position:fixed;margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;">
<span  style="font-family:BREAK;color:#09F; font-size:80px;margin-left:500px; margin-top:0px;margin-bottom:0px;padding:0px;">KECROCK</span>
</div>
<div style="position:fixed;padding:0px 0px 0px 0px;">
<div style="position:fixed;font-family:BREAK;color:#FFF; font-size:80px;margin-left:300px; margin-top:90px;text-decoration:underline;">CHOOSE YOUR SIDE</div>
</div>
<div id="photo">
<a href="AutobotsLevel1.php"><img src="images/AD.jpg" alt="auto" height="400" width="400" /></a>
<a href="DecepticonsLevel1.php"><img src="images/AD1.jpg" alt="decep" height="400" width="400"  /></a>
</div>
<div id="path">
<span class="sides" style="margin-left:190px">
AUTOBOTS
</span>
<span class="sides" style="margin-left:120px;">
DECEPTICONS
</span>
</div>
</body>
</html>
<?php } 
else { header('location:Logout.php'); }
?>