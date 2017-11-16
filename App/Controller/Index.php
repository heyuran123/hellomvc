<?php
namespace App\Controller;
use \Lib\Controller;
class Index extends Controller
{
	public function index(){
		echo 'hello mvc';
		echo '<hr>';
		$user = \Lib\Factory::getModel('User');
		$res = $user->select();
		var_dump($res);
	}
	public function sayName(){
		echo 'heyuran';
	}
}