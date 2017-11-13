<?php
namespace Lib\Database;
use Lib\IDatabase;
class MySQL implements IDatabase
{
	protected $conn = NULL;
	function connect($host, $user, $password, $dbname)
	{
		$conn = mysql_connect($host, $user, $password);
		mysql_select_db('test',$conn);
		$this->conn = $conn;
	}
	function query($sql)
	{
		$res = mysql_query($sql, $this->conn);
		$arr = array();
		$n = 0;
		while($row = mysql_fetch_assoc($res)){
			$arr[$n] = $row;
			$n++;
		}
		return $arr;
	}
	function close()
	{
		mysql_close($this->conn);
	}
}