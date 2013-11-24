<?php
class LoginBeneficiary {

public function login (){

echo"
<body topmargin='30' leftmargin='150' rightmargin='300'>
	<img src='k9logo.jpg' height='500px' width='700px'>
	<form name = 'LoginBenSess' action = 'LoginBenSess.php'>
	<table border='0' align='center'>
		<tr>
			<td><label style='color:#1743b3;font-family:arial;font-size:15px;font-weight:bold;' for='username'>Username: </label></td>
			<td><input type='text' name='username'/></td>
		</tr>
		<tr>
			<td><label style='color:#1743b3;font-family:arial;font-size:15px;font-weight:bold;' for='password'>Password: </label></td>
			<td><input type='password' name='password'/></td>
		</tr>
		<tr>
			<td><input style='text-decoration:none; text-align:center; padding:1px 10px; border:solid 1px #004F72; font:18px Arial, Helvetica, sans-serif; font-weight:bold; color:#E5FFFF; background:#1743b3; -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff; -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #ffffff; box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff;' type='submit' value='Login'/>
		</tr>
	</table>
	</form>
</body>";	
	}
}
$object=new LoginBeneficiary();

$object->login();

?>