<?php
include 'ViewStyle.php';

class RegistrationDonor {
	public function validator () {
		echo "
		<link href='design.css' rel='stylesheet' type='text/css'>
		<html>
		<head>
			<title> INSERT TITLE HEARE </title>

			<script type='text/javascript'>

				function validateForm(formElement) {

					if(formElement.firstname.value.length < 1){
						return focusElement(formElement.firstname, 'Please fill-in the required fields!');
					}
		
					if(formElement.lastname.value.length < 1){
						return focusElement(formElement.lastname, 'Please fill-in the required fields!');
					}
					if(formElement.companyname.value.length < 1){
						return focusElement(formElement.companyname, 'Please fill-in the required fields!');
					}			
					return true;		
				}	

				function focusElement(element, errorMessage) {
					alert((errorMessage.length > 0) ? errorMessage :
					'Error ');
					if (element.select) element.select();				
					return false;
				}
				
				function confirmSubmit(){
					alert ('Account successfuly registered');
				}
				
			</script>
</		head>";	
	}
	
	public function body () {
	echo "

	<body>
		<form name='onRegister'  action='RegDonorConfirm.php' method='post' onsubmit='return validateForm(this);' >
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
	}

}

$object=new RegistrationDonor();
$object->validator();
$object->body();

?>