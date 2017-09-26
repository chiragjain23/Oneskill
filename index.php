
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>KECROCK</title>
</head>
<script type="text/javascript">
function check()
{
	var name=document.getElementById('uname').value;
	var password=document.getElementById('pwd').value;
	if(name=='' || name==' ' || password=='' || password==' ')
	 {
	  return false;
	 } 
	 else { return true; }
}
</script>
<style> 
@font-face
{
font-family : Buxton Sketch;
src : url('buxton_sketch.ttf');
}

@font-face 
{
font-family: BREAK;
src : url('BREAK.TTF');
}

body {
		background-image:url(images/matrix_world_map-wallpaper-1366x768.jpg);
		min-width:960px;
	background-size:cover;
	background-repeat:no-repeat;
	background-color:#000;
	margin-left:200px;
	margin-right:200px;
	background-attachment:fixed;
		
}
#container {
		position:absolute;
		width:inherit;
		height:500px;
		margin-right:200px;
}

#content
{
	position:relative;
	top:100px;
	width:630px;
	float:right;
}
#log {
		position:absolute;
		top:0px;
		left:660px;
		height:300px;
		width:300px;
		float:right;
		font-family:PApyrus;
		color:#000;
		border-radius:25px;
		background-color:rgba(204,51,51,0.8);
		border:medium solid #FFF;
}
.pre {
		font-family:"BREAK";
		font-size:25px;
		color:#FFF;
		font-weight:bolder;
}
input {
		font-family: "Buxton Sketch";
		background-color:inherit;	
		font-size:16px;
		font-weight:700;
}
#np
{
	font-weight:900;
}
</style>
<body>

<div id="container">
	<div id="name" style="margin-left:0px;margin-bottom:0px;margin-top:50px;padding:0px 0px 0px 0px;">
		<p  style="font-family:BREAK;color:#FFF; font-size:80px;margin-left:320px; margin-top:0px;margin-bottom:0px;padding:0px;">ONESKILL</p>
	</div>

	<div id="content">
		<!--<div id="p">
			<p class="pre">Welcome , NEW BOTS</p>
            <p class="pre">THE TIME HAS COME TO SEE WHERE YOU BELONG ,  AUTOBOTS or DECEPTICONS</p>
			<p class="pre">LET SEE WHAT STAND YOU TAKE.......</p>
		</div><!--p-->
-->
		<div id="log">
			<a href="Register.php" style="font-family:PApyrus;font-size:18px;margin-left:15px;color:#FFF;font-weight:bolder;" >Register Here!!!!</a>
			<span style="text-align:center;">
            	<h2>Login to play</h2>
            </span>
			<form id="np" name="login" method="post" action="Login.php" onSubmit="return check()">
				Username:   <input name="uname" id="uname" type="text" size="20" value="" onClick="this.value='';" />
				<br/><br/>
				Password:   <input name="password" id="pwd" type="password" size="20" value=""   onSelect="this.value='';" /><br>
				<br/><br/>
				<span style="margin-left:80px;">
                	<input type="submit" value="START THE HUNT" style="font-weight:bold;" />
                </span>
                <br/>
			</form>
		</div><!--log-->
	</div><!--content-->
    <div style="position:relative;margin-left:0px;top:370px;font-family:'Buxton Sketch';font-size:25px;color:#6FC;">
    <p>This site does not support IE. So Use either FireFox or chrome.</p>
    <p>This Site can be best viewed in the resolution of 1366 X 768.</p></div>
</div><!--container-->

</body>
</html>