<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
<script type="text/javascript" src="jquery-1.7.2.js">
</script>
<script type="text/javascript">
$(document).ready(function() {
	$("#uname").click(function() {
	$("#info p").empty();
});
});
function check()
{	
	var uname=document.getElementById('uname').value;
	var name=document.getElementById('name').value;
	var password=document.getElementById('pwd').value;
	var branch=document.getElementById('branch').value;
	var year=document.getElementById('year').value;
	if(name=='' || name==' ' || password=='' || password==' ' || branch=='' || branch==' '|| uname=='' || uname==' '|| year=='' || year==' ')
	 {
	  alert("Please do not left any Field Empty\nFill all the fields properly");
	  return false;
	 } 
	 else { 
		    return true; 
	 		}
}
function available()
{
	
	var xmlhttp;
var uname=document.getElementById('uname').value;
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
    document.getElementById("info").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","availability.php?uname="+uname,true);
xmlhttp.send();
}
</script>
<style type="text/css">
@font-face {
 font-family:"Buxton Sketch";
	src: url('buxton_sketch.ttf');
}
body {
		background-image:url(images/abstract-matrix_00364383.jpg);
		background-attachment:fixed;
		background-repeat:no-repeat;
		background-size:cover;
}
div {
	   background-color: rgba(0,0,0,0.8);
	   border-radius:25px;
	   width:300px;
	   height:450px;
	   padding:15px 15px 15px 15px;
	   margin-left:450px;
	  }
form {
		font-family:"Viner Hand ITC";
		color:#C90;
}
input { 
font-family:"Viner Hand ITC";
}
#info{
	background-color:transparent;
	font-family:'Buxton Sketch';
	font-size:15px;
	margin:0px;
	padding:0px;
	height:20px;
}
p {
	padding:0px 0px 0px 0px;
	margin:0px 0px 0px 0px;
}
</style>
</head>

<body>
<span style="font-family:'Buxton Sketch'; color:#FFF;font-size:72px;">Registration</span>
<div>
<form action="Enter.php" method="post" onSubmit=" return check()">
Team Name:
<input id="uname" name="uname" type="text" value="Enter the name you will use"  size="40" onclick="this.value='';" onchange="available()" />
<div id="info" style="color:red;"></div>

Branch:<input id="branch" type="text" name="branch" value="Enter in short like CSE,EN,ECE,IT,ME"   size="40" onclick="this.value='';" /><br/><br/>
Year:<input id="year" type="text" name="year" value="Enter in short like 1,2,3,4" size="40" onclick="this.value='';" /><br/><br/>
Password: <input id="pwd" type="password" name="pwd" value="Password"  size="40" onclick="this.value='';" maxlength="8" /><br/><br/>
<input type="hidden" name="browser" value="<?php echo $_SERVER['HTTP_USER_AGENT']; ?>"  />
<input type="submit" value="Register" /><br/>
(All the fields are mandatory).
</form>
</div>
</body>
</html>