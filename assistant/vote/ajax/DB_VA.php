<?php

class DB {
	private $connect_ = NULL;
	private $queryResource_ = NULL;
	
	private $host_;
	private $user_;
	private $passwd_;
	private $database_;
	
	function DB() {
		$this->host_ 		= '127.0.0.1';
		$this->user_ 		= 'ovecomtw_public';
		$this->passwd_ 		= 'KTCH_244_public';
		$this->database_ 	= 'ovecomtw_VA';   
		
		$this->connect();
	}
	
	private function connect()
	{
		$dbConnect = mysql_connect($this->host_, $this->user_, $this->passwd_);
		if(!$dbConnect) die("MySQL connection failed.");
		mysql_select_db($this->database_, $dbConnect) or die("MySQL select DB failed.");
		mysql_query("SET NAMES utf8;", $dbConnect);
		$this->connect_ = $dbConnect;
	}
	
	function query($sql)
	{
		$queryResource = mysql_query($sql, $this->connect_);
		if(!$queryResource) die("MySQL Query Error");
		$this->queryResource_ = $queryResource;
		return mysql_num_rows($queryResource);
	}
	
	function insert($insert) {
		$result = mysql_query($insert, $this->connect_);
		if($result)
			return true;
		else
			return false;
	}
	
	function delete($delete) {
		$result = mysql_query($delete, $this->connect_);
		if($result)
			return true;
		else
			return false;
	}
	
	function update($update) {
		$result = mysql_query($update, $this->connect_);
		if($result)
			return true;
		else
			return false;
	}
	
	function fetch_array()
	{
		return mysql_fetch_array($this->queryResource_, MYSQL_ASSOC); 
	}
	
	
}

?>
