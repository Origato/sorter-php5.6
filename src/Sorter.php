<?php

require_once(__DIR__ . "/SorterTypes.php");

class Sorter extends SorterTypes implements SortetInterface
{
	public $data;
	
	public function __construct(array $data)
	{
		$this->data = $data;
	}
	
	public function sort()
	{
		$arr = $this->data;
		if(!is_array($arr))
		{
			$arr = explode(",", $arr);
			foreach($arr as $key=>$ar)
				$arr[$key] = trim($ar);
		}
		
		$this->data = $arr;
		
		return $this;
	}
}
