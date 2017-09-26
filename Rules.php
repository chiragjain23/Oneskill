<?php
session_start();
if(isset($_SESSION['username']))
{
	
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Follow the Rules</title>

<style type="text/css">
@font-face {
 font-family:"Buxton Sketch";
	src: url('buxton_sketch.ttf');
}
body {
		background-image:url(images/matrix-wallpapers_34861_1600x1200.jpg);
		min-width:960px;
	min-height:768px;
	background-size:cover;
	background-repeat:no-repeat;
	background-color:#000;
	margin-left:200px;
	margin-right:200px;
	background-attachment:fixed;
		/*background-size:cover;
		background-repeat:no-repeat;
		background-attachment:fixed;
		max-width:960px;
		margin-left:auto;
		margin-right:auto;
		height:auto; */  	
}
a { color:#FFF; }
#container {
	position:absolute;
	margin-left:150px;
	float:left;
}
#Rules{		position:relative;
			font-family: "Buxton Sketch";
			font-size:70px;
			color:#FFF;
			margin-left:100px;
}
#rr {
	position:absolute;
		font-family: "Buxton Sketch";
		font-size:18px;
		border-radius:25px;
		background-color:rgba(0,0,0,0.7);
		margin-top:30px;
		width:700px;
		color:#FFF;		  
		padding-top:5px;
		padding-bottom:5px;  
}
#continue:hover {
	color:#930;
}
</style>
</head>

<body>
<div id="container">
	<div id="Rules">
			<p style="padding:0px 0px 0px 0px;margin:0px 0px 0px 0px;">Rules Of The Game</p>
	</div><!--Rules-->
	
    <div id="rr">
		<ul style="list-style-type:hebrew;">
			<li>The hunt is simple. Successively crack one riddle to move on to the next one.</li>
			<li>The first person to crack the answers will be crowned the king of the game.</li>
			<li>We reserves the rights to disqualify any participant if it finds out that the person is using unfair means to solve the questions.</li>
			<li>Google and Wiki will be your best friends. Use keywords given in the hints to obtain good results.</li>
			<li>A textbox is provided at the bottom of each question. Caps, spaces and special characters are not allowed. For example, if  your answer is One Skill, type your answer as oneskill. The answers could be alphanumeric.</li>
            <li>If your answer is a number, for example:742, then write answer as sevenfourtwo.</li>
			<li>Look closely at each and every clue given on a page. Not all of them might be useful... Some of them are simply present to  mislead you.</li>
			<li>All clues are not visible upfront on the question page. You might have to download the source code or images and examine the entities present in the relic on every path. </li>
            <li>You are advised not to provide answers to the participants on the forum. It will lead to immediate disqualification.</li>
	</ul>
    <br/>
                <p style="margin:0px auto;width:700px; font-size:20px;">Now get ready, sit back and relax!! All the best for your journey. </p><br/>
		<a href="StoryBoard.php" style="text-decoration:none;" >
		<div id="continue" style="width:120px;margin-left:260px;background-color:#06F;border-radius:8px;padding:3px 3px 3px 3px;border-width:thick;border-style:solid; opacity:1.0;">
			Continue To Game</div>
            </a>
		</div><!--continue-->
    </div><!--rr-->
</div><!--container-->

<!-- A series of unfortunate events-->
</body>
</html>
<?php }
else {
	header('location:Logout.php');} ?>

