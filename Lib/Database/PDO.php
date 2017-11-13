<?php
namespace Lib\Database;
use Lib\IDatabase;
class PDO implements IDatabase
{
	protected $conn = NULL;
	function connect($host, $user, $password, $dbname)
	{
		$conn = new PDO("pgsql:host = $host;dbname = $dbname", $user, $password);
		$this->conn = $conn; 
	}
	function query($sql)
	{
		$res = $this->conn->query($sql);
		return $res->fetchAll();
	}
	function close(){
		unset($this->conn);
	}
}