<?php
include 'ViewStyle.php';

class Home {
	public function body () {
		echo "
		<!DOCTYPE HTML>
		<html>
		<head>
			<link href='design.css' rel='stylesheet' type='text/css'>
		</head>
		<body>
			<form name='register'  action='RegDonorConfirm.php' method='post' onsubmit='return validateForm(this);' >
				<div style='position:absolute;left:15.5%;top:24%;'>	
				<p><font face='arial'><font size='2'><b>K9Donations:&nbsp;</b><font color='gray'>Home</font></font></font></p>	
				</div>	
				<div style='position:absolute;left:17%;top:38%;'>
					<img src='pic.png' height='300px' width='650px'>
				</div>		
			</form>
			<script src='js/bootstrap.js'></script>
		</body>
		</html>";	
		
	}
}

$object=new Home();
$object->body();
?>