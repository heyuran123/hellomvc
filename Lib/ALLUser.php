<?php
namespace Lib;
class ALLUser implements \Iterator
{
	protected $ids;
	protected $index;
	function __construct()
	{
		$db = Factory::getDatabase();
		$this->ids = $db->query("select id from user");
	}
	function current()
    {
        $id = $this->ids[$this->index]['id'];
        return Factory::getUser($id);
    }

    function next()
    {
        $this->index ++;
    }

    function valid()
    {
        return $this->index < count($this->ids);
    }

    function rewind()
    {
        $this->index = 0;
    }

    function key()
    {
        return $this->index;
    }
}