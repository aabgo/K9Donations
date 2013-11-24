<?php
include 'ViewStyle.php';

class RegistrationBeneficiary {
	public function validator () {
		echo "
		<link href='design.css' rel='stylesheet' type='text/css'>
		<html>
		<head>
			<title> INSERT TITLE HEARE </title>

			<script type='text/javascript'>

				function validateForm(formElement) {

					if(formElement.fullname.value.length < 1){
						return focusElement(formElement.fullname, 'Please fill-in the required fields!');
					}
					
					if(formElement.address.value.length < 1){
						return focusElement(formElement.address, 'Please fill-in the required fields!');
					}
					
					if(formElement.contactnumber.value.length < 1){
						return focusElement(formElement.contactnumber, 'Please fill-in the required fields!');
					}

					if(formElement.username.value.length < 1){
						return focusElement(formElement.username, 'Please fill-in the required fields!');
					}				
					if(formElement.password1.value.length < 1){
						return focusElement(formElement.password1, 'Please fill-in the required fields!');
					}			
					if(formElement.password1.value != formElement.password2.value){
						return focusElement(formElement.password2, 'Password and verified password does not match!');
					}
					return true;		
				}	

				function focusElement(element, errorMessage) {
					alert((errorMessage.length > 0) ? errorMessage :
			y		'Error ');
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
		<form name='onRegister'  action='RegBeneficiaryConfirm.php' method='post' onsubmit='return validateForm(this);' >
			<div style='position:absolute;left:15.5%;top:24%;'>	
				<p><font face='arial'><font size='2'><b>K9Donations:&nbsp;</b><font color='gray'>Registration</font></font></font></p>	
			</div>	
			<div style='position:absolute;left:40%;top:34%;'>
				<p><font face='arial'><font size='2'>Full Name &emsp;&emsp;&emsp;&emsp;</font></font>
				<input type='text' name='fullname'><font color='red'>*</font></p>
				<p><font face='arial'><font size='2'>Address &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&thinsp;</font></font>
				<input type='text' name='address'><font color='red'>*</font></p>
				<p><font face='arial'><font size='2'>Contact Number&emsp;&nbsp;&thinsp;</font></font>
				<input type='text' name='contactnumber'><font color='red'>*</font></p>
				<p><font face='arial'><font size='2'>Username&emsp;&emsp;&emsp;&nbsp;&thinsp;&thinsp;&nbsp;&thinsp;</font></font>
				<input type='text' name='username'><font color='red'>*</font></p>
				<p><font face='arial'><font size='2'>Password&emsp;&emsp;&emsp;&nbsp;&nbsp;&thinsp;&nbsp;&thinsp;&thinsp;</font></font>
				<input type='password' name='password1'><font color='red'>*</font></p>
				<p><font face='arial'><font size='2'>Confirm Password&nbsp;&thinsp;&thinsp;</font></font>
				<input type='password' name='password2'><font color='red'>*</font></p>
				<a href='RegistrationBeneficiaryView.php' align='center' ><input type='submit' value='Register' class='button1'></a>
				<a href='RegistrationBeneficiary.php' align='center' ><input type='submit' value='Cancel' class='button1' /></a>
			</div>		
		</form>
	</body>
</html>";	
	}

}

$object=new RegistrationBeneficiary();
$object->validator();
$object->body();

?>