<?php
namespace Lib;
class Application 
{
	public $configs;
	protected static $instance = NULL;
	protected function __construct()
	{
		//$config = require('/configs/database.php');
		$this->configs = new Config('/configs');
	}
	static function getInstance()
	{
		if(empty(self::$instance)){
			self::$instance = new self();
		}
		return self::$instance;
	}
	static function run()
	{
		$uri = $_SERVER['REQUEST_URI'];
		list($c, $v) = explode('/', trim($uri, '/'));
		$c = ucwords(strtolower($c));
		$class = '\\App\\Controller\\'.$c;
        $obj = new $class();
        $obj->$v();
	}
}