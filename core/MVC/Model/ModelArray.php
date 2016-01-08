<?php 

namespace Fiesta\Core\MVC\Model;

/**
* Model array Class
*/
class ModelArray
{
	public $data;

	function __construct($data = null)
	{
		if( ! is_null($data))$this->data = $data;
	}

	public function add($row)
	{
		$this->data[]=$row;
	}

	public function get()
	{
		return $this->data;
	}

	public function count()
	{
		return count($this->data);
	}

	public function take($count,$start=0)
	{
		$data=new self();
		//
		$last=$this->count() > $count ? $count : $this->count();
		//
		for ($i=$start; $i < $last; $i++) { 
			$data->add($this->data[$i]);
		}
		//
		return $data;
	}
}