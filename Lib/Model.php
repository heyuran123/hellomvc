<?php
namespace Lib;
class Model
{
	public $db = NULL;
	public function __construct(){
		//$this->db = Factory::getDatabase();
	}
	public function init(){
		$this->db = Factory::getDatabase();
	}
}