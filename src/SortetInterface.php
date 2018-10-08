<?php

require_once(__DIR__ . "/Sorter.php");

interface SortetInterface
{
	public function sort();
	public function asc();
	public function desc();
}