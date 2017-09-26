<?php 
include 'update.php';
$sql="SELECT teamname from leaderboard ORDER BY qno DESC,diff ASC LIMIT 10";
$result=mysql_query($sql,$con);
$list="";
if (!$result)
   {
   die('Error: ' . mysql_error());
   }
   else 
   { 
   	 while($row = mysql_fetch_array($result))
	 {
		$list=$list."<ul><li>".strtoupper($row['teamname'])."</li></ul>";
	 }
		 echo $list;
     }
	   mysql_close($con);
?>