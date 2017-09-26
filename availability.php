<?php
$uname=$_GET['uname'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("Could not connect: ".mysql_error());
}
mysql_select_db("oneskill",$con);
$sql="SELECT teamname from team";
$result=mysql_query($sql,$con);
if (!$result)
   {
   die('Error: ' . mysql_error());
   }
   else 
   { 
   		while($row=mysql_fetch_array($result))
		{
			if($row['teamname']==$uname)
			{
				$ans= "<p style='color:red;'>Teamname not available.Try a different one</p>";
				break;
			}
			else { $ans="<p style='color:green;'>OK,Teamname Is Availiable</p>"; }
		}
			echo $ans;
		
   } 
   mysql_close($con);
?>