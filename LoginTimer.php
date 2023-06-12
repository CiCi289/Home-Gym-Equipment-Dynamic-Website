<?php 
session_start();
//after 3 tries, kept entering wrong, Pause account login for 10 mins and try again.
//sent back to login after.
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login Timer</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
 </head>
 
 <body class="Black-Bg">
 	<div id="Timer"></div> <br>
	<p class="White-text">Meanwhile..., You can do some Push-ups like this :D </p>
	<img src="img/mathieu_cool_kidz.gif" alt="Pushup gif">
 	<script>
 		var month =new Date().getMonth()+1;
 		var hour=new Date().getHours();
 		var day=new Date().getDate();
 		var year=new Date().getFullYear();
 		var minutes=new Date().getMinutes()+10;
 		var second=new Date().getSeconds();
 		var time=hour + ":" + minutes + ":" + second;
 		var ResetTime=new Date(month + " " + day + " " + year + " " + time).getTime();
 		var x= setInterval(function()
 		{
 			var now=new Date().getTime();
 			var distance= ResetTime - now;
 			var minutes= Math.floor((distance % (1000 * 60 * 60))/ (1000 * 60));
 			var seconds= Math.floor(( distance % (1000 * 60))/ 1000);
 			document.getElementById("Timer").innerHTML = "<h1 class='White-text'>Please try again after:</h1>"+"<br> <br>"+"<h1 class='Yellow-text'>" + minutes + "m " + seconds + "s </h1>";
			console.log(minutes + seconds);
 		if (distance<=0)
 		{
 			clearInterval(x);
 			document.getElementById("Timer").innerHTML="";
 			location="Customer_Login.php";
 		}
 		},1000); 
 	</script>
 
 </body>
 </html>