<?php
	class ViewStyle{
		
		public function head()
		{
			echo "
			<link href='design.css' rel='stylesheet' type='text/css'/>
			<link type='text/css' rel='stylesheet' href='css/bootstrap-themes.css'/>
			<html>
				<head>
					<title> K9Donations </title>
					<style>
						html
						{
							background:url('gray.jpg')  center;
							min-height:100vh;
							background-size:auto;
						}	
					</style>	

				</head>";	
		}
		
		public function body ()
		{
			echo "
			<body>
				<form name='body'>
				<div style='opacity:2;position:absolute;left:14.2%;top:14%;width:71.3%;height:80%;background-color:white;'>
				</div>	
				<div style='opacity:2;position:absolute;left:0%;top:0%;width:100%;height:1.2%;background-color:#1E90FF;'>
				</div>
				<div style='opacity:0.8;position:absolute;left:14.2%;top:98.8%;width:71.3%;height:0.1%;background-color:gray;'>
				</div>
			
				<div style='position:absolute;left:76.7%;top:1.5%;'>	
					<a href='CreateAccount.html' style='text-decoration:none'><font face='arial'><font size='1'><font color='gray'>My Account |</font></font></font></a>	
					<a href='login.php' style='text-decoration:none'><font face='arial'><font size='1'><font color='gray'>Sign Out</font></font></font></a>	</div>	
				<div style='position:absolute;left:14%;top:1.6%;'>	
					<img border='0' align='center' src='k9logo.jpg' alt='K9 logo' width='104' height='75'>	
				</div>	
				<div style='position:absolute;left:27%;top:18%;width:90%;height:85%;'>
					<table border='1' style='align:center;'>
						<a href='Home.php' align='center' class='button' name='home'>HOME</a>
						<a href='Signup.php' align='center' class='button' name='about'>K9 Donations </a>
						<a href='transaction.html' align='center' class='button' name='transaction'>YOUR TRANSACTIONS</a>
					</table>
				</div>	
				<div style='position:absolute;left:15%;top:32%;width:67.5%;height:56%;'>
					<fieldset style='width:100%; height:100%'>
					</fieldset>
				</div>
				<div style='opacity:0.3;position:absolute;left:15.1%;top:25.6%;width:69.5%;height:4%;background-color:silver;'>
				</div>	

				<div style='position:absolute;left:14.3%;top:97%;'>	
					<p><font face='arial'><font size='1'><font color='gray'>Copyright &copy; 2013 JUSTIN & FRIENDS  </font></font></font></p>		
				</div>
				<div style='position:absolute;left:70.7%;top:99%;'>	

					<a href='home.html' style='text-decoration:none'><font face='arial'><font size='1'><font color='gray'>Send Feedback |</font></font></font></a>
					<a href='home.html' style='text-decoration:none'><font face='arial'><font size='1'><font color='gray'>Contact Us |</font></font></font></a>		
					<a href='home.html' style='text-decoration:none'><font face='arial'><font size='1'><font color='gray'>Developers</font></font></font></a>
				</div>	

			</form>
			<script src='js/bootstrap.js'> </script>
			</body>
			</html>";	
		}
		
	}
	
$object=new ViewStyle();
$object->head();
$object->body();
?>