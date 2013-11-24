<?php

class RegisterConfirm {
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
	public function tablename() {
        $this->table=mysql_query("INSERT INTO beneficiary(fullName, address, contactNumber, username, password) 
								 VALUES ('".$_POST[fullname]."','".$_POST[address]."','".$_POST[contactnumber]."', '".$_POST[username]."',md5('".$_POST[password]."'))");
    }
}

$name=new RegisterConfirm();
$name->controls();
$name->connection();
$name->databaseconnection();
$name->tablename();

header("Location: Home.php");

?>