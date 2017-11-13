<?php
namespace Lib;
interface IDatabase
{
	function connect($host,$user,$password,$dbname);
	function query($sql);
	function close();
}