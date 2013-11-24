<?php
include 'ViewStyle.php';
//require_once('/m/mobilize.php');

class Home {
	public function body () {
		echo "
		<!DOCTYPE HTML>
		<html>
		<head>
			<link type='text/css' rel='stylesheet' href='css/bootstrap.css'/>
		</head>
		<body>
			<form name='register'  action='RegDonorConfirm.php' method='post' onsubmit='return validateForm(this);' >
				<div style='position:absolute;left:15.5%;top:24%;'>	
				<p><font face='arial'><font size='2'><b>K9Donations:&nbsp;</b><font color='gray'>Home</font></font></font></p>	
				</div>	
				<div style='position:absolute;left:16%;top:30%;'>
					<p><font face='arial'><font size='10'>This is Home</font></font>
					</p>
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