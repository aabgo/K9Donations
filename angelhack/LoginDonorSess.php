<?php
class login {
    var $host;
    var $user;
    var $pass;
    var $data;
    var $con;
    var $table;
    var $db;

public function controls() {
        $this->host="localhost";
        $this->user="root";
        $this->pass="root";
        $this->data="tracking";
    }
public function connection() {
        $this->con = mysql_connect($this->host,$this->user,$this->pass);
    }	
public function databaseconnection() {
        $this->db=mysql_select_db($this->data,$this->con);
    }
public function loger (){
	$query = "SELECT * from donor";
	$result = mysql_query($query);
	$rows = mysql_num_rows($result);
	$username = $_REQUEST['username'];
	
	for($i=0; $i<$rows; $i++)
	{
		if($username == mysql_result($result, $i, 'uname'))
		{
				session_start();
				$uname = $_SESSION['uname'];
				header("location: Home.php");
				break;
		}
		else
		header("location: LoginDonor.php");
	}		
		
	}
}
$object=new login();
$object->controls();
$object->connection();
$object->databaseconnection();
$object->loger();

?>