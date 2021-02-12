<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'userdb');
class DB_con
	{
	function __construct()
	{
	$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	$this->dbh=$con;
	// Lidhja e dbs
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	//kjo bohet echo kur nuk bohet lidhja me dbn
	}

	public function usernameavailblty($uname) {
	$result =mysqli_query($this->dbh,"SELECT Username FROM tblusers WHERE Username='$uname'");
	return $result;

	}