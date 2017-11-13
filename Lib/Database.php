<?php
namespace Lib;
class Database
{
	private static $db = NULL;
	private $message = NULL;
	private function __construct()
	{
		
	}
	static function getInstance(){
		if(isset(self::$db)){
			return self::$db;
		}else{
			self::$db = new self();
			return self::$db;
		}
	}


	function init(){
		$this->message = 1111;
	}
	function set(){
		$this->message = $this->message.'2';
	}
	function get(){
		echo $this->message;
	}

}