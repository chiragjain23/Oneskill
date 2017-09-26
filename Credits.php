<?php 
session_start();
if(isset($_SESSION['username']))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Credits</title>
<style type="text/css">
@font-face {
	font-family:"Buxton Sketch";
	src:url('buxton_sketch.ttf');
}
body {
		background-image:url(images/Optimus-Prime.jpg);
		background-size:cover;
		min-width:960px;
}
.yo {
	font-family:'Buxton Sketch';
	color:#FFF;
	font-size:25px;
	padding:0px;
	margin:0px;
}
#create {
		position:relative;
		margin-left:150px;
		margin-top:50px;

}
a {  color:#CF0;  }
#name {
	font-family:'Buxton Sketch'; 
	color:#000; 

font-family:"Buxton Sketch";
font-size:24px;
color:#FFF;
}
#span {
	background: -moz-linear-gradient(top, #a90329 0%, #8f0222 44%, #6d0019 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#a90329), color-stop(44%,#8f0222), color-stop(100%,#6d0019)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #a90329 0%,#8f0222 44%,#6d0019 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #a90329 0%,#8f0222 44%,#6d0019 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, #a90329 0%,#8f0222 44%,#6d0019 100%); /* IE10+ */
background: linear-gradient(to bottom, #a90329 0%,#8f0222 44%,#6d0019 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
}
a:hover { color:#000;}
</style>
</head>

<body>
<div id="credit">
<span style="font-family:'Buxton Sketch';color:#FFF;font-size:70px;">
Credits
</span>
<div id="name" style="padding:2px;">
<span id="span" style="margin-left:250px;">
||&nbsp;
<a href="" style="text-decoration:none">Home</a>&nbsp;||
<a href="Rules.php" style="text-decoration:none">Rules</a>&nbsp;||
<a href="Logout.php" style="text-decoration:none;">Logout</a>&nbsp; ||
</span>
</div>
<div id="create">
<div>
<p class="yo">Chirag Jain</p>
<p class="yo">CSE,4th Year</p>
<p class="yo"></p>
</div>
<div style="position:relative;margin-top:100px;">
<p class="yo">Anurag Tomer</p>
<p class="yo">CSE,4th Year</p>
<p class="yo"></p>
</div>
<span>
</span>
</div>
</div>
</body>
</html>
<?php 
}
else { header('location:Logout.php'); }


?>