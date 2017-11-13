<?php
namespace Lib;
class Factory
{
	static function createTest2(){
		$test2 = new Test2;
		return $test2;
	}
	static function createDatabase(){
		$db = Database::getInstance();
		return $db;
	}
	static function getUser($id = NULL)
	{
		$key = 'user_'.$id;
		$user = Register::get($key);
		if(!$user){
			$user = new User($id);
			Register::set($key, $user);
		}
		return $user;
	}
	static function getDatabase()
	{
		$key = 'mysql';
		$db = Register::get($key);
		if(!$db){
			$conf = \Lib\Application::getInstance()->configs['database']['master'];
			$db = new \Lib\Database\MySQL();
			$db->connect($conf['host'], $conf['user'], $conf['password'], $conf['dbname']);
			Register::set($key,$db);
		}
		return $db;
	}
	static function getModel($name)
	{
		$key = 'model_'.$name;
		$model = Register::get($key);
		if(!$model){
			$class = "\\App\\Model\\".$name;
			$model = new $class;
			Register::set($key, $model);
		}
		return $model;
	}
}