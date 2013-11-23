<?php
		$dbserver = mysql_connect('localhost', 'root', 'root');	
		if (!$dbserver) die ("unable to connect to mysql: " .mysql_error());
		mysql_select_db('tracking')
		or die("Unable to select database: " . mysql_error());
	
	echo "
	<html>
	<body>
		<form name='onRegister'  action='phpyo.php' method='post';' >
			<div style='position:absolute;left:15.5%;top:24%;'>	
				<p><font face='arial'><font size='2'><b>K9Donations:&nbsp;</b><font color='gray'>Registration</font></font></font></p>	
			</div>	
			<div style='position:absolute;left:40%;top:34%;'>
				<p><font face='arial'><font size='2'>Full Name &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&thinsp;</font></font>
				<input type='text' name='fullName'><font color='red'>*</font></p>
				<p><font face='arial'><font size='2'>Company Name &emsp;&emsp;&thinsp;</font></font>
				<input type='text' name='companyName'></p>
				<p><font face='arial'><font size='2'>Address &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&thinsp;</font></font>
				<input type='text' name='address'></p>
				<p><font face='arial'><font size='2'>Contact Number &emsp;&emsp;</font></font>
				<input type='text' name='contactNumber'><font color='red'>*</font></p>
				<p><font face='arial'><font size='2'>E-mail Address &emsp;&emsp;&nbsp;&thinsp;</font></font>
				<input type='text' name='emailAddress'></p>
				<p><font face='arial'><font size='2'>Donation Amount &emsp;&nbsp;&thinsp;</font></font>
				<input type='text' name='amount'><font color='red'>*</font></p>
				<a href='RegDonorConfirm.php' align='center' ><input type='submit' value='Donate' class='button1' ></a>
				<a href='RegistrationDonor.php' align='center' ><input type='submit' value='Cancel' class='button1' /></a>
			</div>		
		</form>
		</body>
		</html>";
		
		//if(isset($_POST['name'])){ $name = $_POST['name']; } 
		$fullName = $_POST['fullName'];
		$companyName = $_POST['companyName'];
		$address = $_POST['address'];
		$emailAddress = $_POST['emailAddress'];
		$contactNumber = $_POST['contactNumber'];
		$amount = $_POST['amount'];
		
		$query = mysql_query("INSERT INTO donor(fullName, companyName,  address, emailAddress, contactNumber, amount) 
								VALUES ('$fullName', '$companyName', '$address', '$emailAddress', '$contactNumber', '$amount')");
		$result = mysql_query($query);
		if (!$result) die("");
		mysql_close($dbserver);
		
		header("location: Home.php");
	
		

?>