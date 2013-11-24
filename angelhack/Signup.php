<?php
include 'ViewStyle.php';

class Signup {
	public function body () {
echo "

<body>
	<div style='position:absolute;left:15.5%;top:24%;'>	
		<p><font face='arial'><font size='2'><b>K9Donations:&nbsp;</b><font color='gray'>Share the love!</font></font></font></p>	
	</div>	
	<div style='position:absolute;left:21%;top:34%;'>
		<h3><font face='arial'> Care to donate? </font> </h3>
		<p align = center><font face='arial'> <font size='2'><b>Already have an account?&nbsp;</b><font color='gray'> <a href='LoginDonor.php' align='center' ><input type='submit' value='Login' class='button1'></a> </font></font></font></p>
		<p align = center><font face='arial'> <font size='2'><b>Want to sign up and donate?&nbsp;</b><font color='gray'> <a href='RegistrationDonor.php' align='center' ><input type='submit' value='Register' class='button1'></a> </font></font></font></p>
	</div>		
	
	<div style='position:absolute;left:53%;top:34%;'>
		<h3><font face='arial'> Need relief for your area? </font> </h3>
		<p align = center><font face='arial'> <font size='2'><b>Already have an account?&nbsp;</b><font color='gray'> <a href='LoginBeneficiary.php' align='center' ><input type='submit' value='Login' class='button1'></a> </font></font></font></p>
		<p align = center><font face='arial'> <font size='2'><b>Want to sign up?&nbsp;</b><font color='gray'> <a href='RegistrationBeneficiary.php' align='center' ><input type='submit' value='Register Now' class='button1'></a> </font></font></font></p>
	</div>
</body>
</html>";	
	}

}
$object=new Signup();
$object->body();

?>