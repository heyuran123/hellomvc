<?php
namespace Lib;
class User
{
	public $information = NULL;
	function __construct($id = NULL){
		$db = Factory::getDatabase();
		$res = $db->query("select * from user where id=$id");
		$this->information = $res;
	}
	function getInformation(){
		return $this->information;
	}
}