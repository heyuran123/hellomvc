<?php
namespace App\Model;
use \Lib\Model;
class User extends Model
{
	public function __construct(){
		parent::init();
	}
	public function select(){
		$res = $this->db->query('select * from user');
		return $res;
	}
}