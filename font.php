<?php 
session_start();
if(isset($_SESSION['username']))
{
	$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("Could not connect: ".mysql_error());
}
mysql_select_db("oneskill",$con);

$sql="SELECT qno from leaderboard where teamname='".$_SESSION['username']."'";

$result=mysql_query($sql,$con);
$row=mysql_fetch_array($result);

	if($row['qno']!=12)
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

mysql_close($con);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hunting Begins</title>
<link rel="stylesheet" type="text/css" href="Questions.css" />
<script type="text/javascript">
window.onload = startInterval;
    function startInterval()
    {
        setInterval("leaders();",1000);
    }
function leaders()
{ 
var xmlhttp;

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("leaders").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","leaders.php?time=<?php time(); ?>",true);
xmlhttp.send();
}
   
    
    
</script>
</head>

<body onload="leaders()">
<script type="text/javascript">
</script>

<div id="container">
<div id="header" style="margin:0px;padding:0px;">
<span id="wname"  style="">ONESKILL</span>

</div>
<div id="name">
Welcome,
<div id="user">

<?php
print $_SESSION['username'];
?>
&emsp;

</div>
</span>
<span id="links">
||&nbsp;
<a href="Rules.php" style="text-decoration:none">Rules</a>&nbsp;||
<a href="Logout.php" style="text-decoration:none;">Logout</a>&nbsp; ||
</span>

</div>

<div id="leaderQ">

<div id="leaderboard">
<table width="100%"><tr  id="level"></tr><tr><td id="board">LEADERBOARD</td></tr><tr>
<td>

<div id="leaders">

</div>
</td>
</tr></table>
</div>
<div id="Questions" >
<center id="c">
<img src="images/ignorance.png" alt="optimus" height="267px" width="600px" />
<?php 

if(isset($_POST['submit']))
{

$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("Could not connect: ".mysql_error());
}
mysql_select_db("oneskill",$con);

$sql="SELECT * from solans where qno=".$_POST['qno']."";
$result=mysql_query($sql,$con);
$row=mysql_fetch_array($result);
if(strcmp($row['answer'],$_POST['ans'])==0)
{ 
	$sql="UPDATE leaderboard SET qno=".($_POST['qno']+1)." where teamname='".$_SESSION['username']."'";
	$result=mysql_query($sql,$con);
	header('location:Logout.php');
	
}
else {
	header('location:font.php'); 
	}
mysql_close($con);

}

?>

<form style="margin-top:25px;" action="font.php" method="post">
Answer:<input name="ans" type="text" style="font-family:'Buxton Sketch';font-size:18px;" size="30" />
<input type="hidden" name="qno" value="12" />
<input type="submit"  name="submit" value="Submit" />
</form>
</center>
<!-- HINTS HERE 

find the missing ones

-->

</div>
</div>
</div>
</body>

</html>
<?php  
}
else { header('location:Logout.php');}
 ?>