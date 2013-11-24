<?php
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$pass = MD5($password);
	$db = mysql_connect('localhost', 'root', 'root');
	mysql_select_db('tracking');
	$query = "Select * from beneficiary WHERE username = '$username' and password = '$pass'";
	$r = mysql_query($query);
	$rows = mysql_num_rows($r);

	if($rows!=0){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $pass;
		header("Location: Donations.php");
		break;	
	}

	else{
		header("Location: LoginBeneficiary.php");
	}
	mysql_close($db);
?>