<?php
namespace Lib;
class Register
{
	protected static $objects;
	static function set($key, $object){
		self::$objects[$key] = $object;
	}
	static function get($key){
		if(!isset(self::$objects[$key])){
			return false;
		}
		return self::$objects[$key];
	}
	static function _unset($key){
		unset(self::$objects[$key]);
	}
}