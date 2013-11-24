<?php
include 'ViewStyle.php';

class Donations {
	public function validator () {
		echo "
		<link href='design.css' rel='stylesheet' type='text/css'>
		<html>
		<head>
			<title> INSERT TITLE HEARE </title>

			<script type='text/javascript'>

			</script>
</		head>";	
	}
	
	public function body () {
	$dbserver = mysql_connect('localhost', 'root', 'root');
	if (!$dbserver) die ("unable to connect to mysql: " .mysql_error());
	mysql_select_db('tracking')
		or die("Unable to select database: " . mysql_error());
	$query = "SELECT d.fullName, ,  , years FROM particulars";
	$r = mysql_query($query);
	$rows = mysql_num_rows($r);
	echo "

	<body>
		<form name='tracking'  action='Donations.php' method='post' onsubmit='return validateForm(this);' >
			<div style='position:absolute;left:15.5%;top:24%;'>	
				<p><font face='arial'><font size='2'><b>K9Donations:&nbsp;</b><font color='gray'>Donations</font></font></font></p>	
			</div>	
			<div style='position:absolute;left:40%;top:34%;'>";
			echo "<table border = '1'>";
			echo "<tr style='background-color:crimson;text-align:center;color:white;'> <th> Donor's ID </th> <th> Date of delivery </th> </tr>";
			for ($i=0; $i<$rows; $i++){
				if($i%2 == 0)
					echo "<tr style='background-color:chartreuse;text-align:center;'>";
				else if ($i%2 != 0)
					echo "<tr style='background-color:crimson;text-align:center;color:white;'>";
						echo "<td style='font-family:verdana; font-size:16px;font-weight:bold;'>" . mysql_result($r, $i, '') . "</td>";
						echo "<td style='font-family:verdana; font-size:16px;font-weight:bold;'>" . mysql_result($r, $i, '') . "</td>";
						echo "</tr>";
			}
		echo"</div>		
		</form>
	</body>
</html>";	
	}

}

$object=new Donations();
$object->validator();
$object->body();

?>