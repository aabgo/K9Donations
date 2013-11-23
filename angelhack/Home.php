<?php
include 'ViewStyle.php';

class Home {
	public function body () {
		echo "
	
		<body>
			<form name='register'  action='RegDonorConfirm.php' method='post' onsubmit='return validateForm(this);' >
				<div style='position:absolute;left:15.5%;top:24%;'>	
				<p><font face='arial'><font size='2'><b>SYMON:&nbsp;</b><font color='gray'>Home</font></font></font></p>	
				</div>	
				<div style='position:absolute;left:16%;top:30%;'>
					<p><font face='arial'><font size='10'>This is Home</font></font>
					</p>
				</div>		
			</form>

		</body>";	
	}
}

$object=new Home();
$object->body();
?>