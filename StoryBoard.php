<?php 
session_start();

if(isset($_SESSION['username']))
{
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>StoryBoard</title>
<style type="text/css">
@font-face {
	font-family:"Buxton Sketch";
	src:url('buxton_sketch.ttf');
}
body {
	    background-image:url(images/NEO-in-Matrix.jpg);
		/*background-size:cover;
		max-width:960px;
		float:none;*/
		min-width:960px;
	min-height:768px;
	background-size:cover;
	background-repeat:no-repeat;
	background-color:#000;
	margin-left:50px;
	margin-right:150px;
	background-attachment:fixed;
}
a {color:#FFF; }
#container {
	position:absolute;
	margin-left:150px;
	float:left;
}

#story {
		  font-family:"Buxton Sketch";
		  font-size:72px;
		  color:#FFF;
		 margin-left:300px;
}

#s {	
position:absolute;
		color:#000;
		font-family:"Buxton Sketch";
		font-size:18px;
		width:960px;
		background-color: rgba(255,255,255,0.7);
		border-radius:25px;
		padding:15px 15px 15px 15px;
		 margin-top:50px;
}
a:hover { border-color:#9F0; }
</style>
</head>

<body>
<div id="container">
<div id="story">
Story Board
</div>
<div id="s">
<p>
“Throughout human history, we have been dependent on machines to survive. Fate, it seems, is not without a sense of irony.”
</p>
<p>
-Morpheus
</p>
<p>
All life on Earth is nothing more than an elaborate façade; a hoax, fabricated by sentient machines. It is the year 2199. Unable to bear the atrocities against them, the cyber-intelligent machines begotten by the human race had turned malevolent and revolted against their creators. Thus had begun the war between man and machine. The humans knew that the machines would soon overpower them unless their primary power source, the sun, was blocked out. The humans torched the skies in Operation Dark Storm, effectively casting a black blanket across the sky. But the robots anticipated such a move and stored great quantities of their power, enabling them to fight under blackened skies. With no sunlight, humans ran out of food faster than the robots ran out of their stored energy.
 </p>
<p>
Having vanquished the humans in the war, the machines gradually learned to harness the bio-electric and thermal energy emanating from the bodies of their defeated creators. They found an efficient way to use the human bodies as receptacles for controlling cold fusion reactions, thus turning humans into power generators. While their life essence was being “farmed”, their minds were imprisoned within an artificial reality known as the Matrix. Oblivious to the reality of their capture, the human minds are fooled into believing that they are living in their "normal" world, as it was in the year 1999. The only group of people that managed to evade this imprisonment was the one that was hiding deep underground, near the Earth's core where it would still be warm for many millennia. And there they'd built the great city of Zion.
 </p>
<p>
homas A. Anderson, a computer programmer and also a hacker going by the alias “Neo”, is contacted by Morpheus. Morpheus, a captain of one of the many hovercraft ships in Zion’s fleet, awakens Neo to the real world and explains to him the intricacies of the Matrix. Morpheus believes that Neo is The Chosen One, mankind’s only hope for freedom. With the fate of humanity resting on Neo, he battles Agents, sentient computer programs entrusted with protecting the Matrix. Leading the human rebellion, Neo eventually teaches himself to perceive and control The Matrix.
</p>
<p style="margin:0px auto;width:300px; font-size:28px;">Are You the chosen one ???</p><br/><br/>
<div id="continue" style="width:120px;margin-left:380px;background-color:#000;border-radius:8px;padding:3px 3px 3px 3px;border-width:thick;
border-style:solid;border-color:#900;">
<a href="Start.php"  style="text-decoration:none;margin-left:5px;">Start The Game</a>
</div>
</div>
</div>


</body>
</html>
<?php }
else { header('location:Logout.php'); } ?>