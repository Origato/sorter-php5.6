<?php require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>


<?php

require_once(__DIR__ . "/src/SortetInterface.php");

$arr = "5,2,3, 6, 1,4";
$sorter = new Sorter($arr);
$sort = $sorter->sort()->asc();
var_dump($sort);

$arr = "e,b,c, f, a,d";
$sorter = new Sorter($arr);
$sort = $sorter->sort()->asc();
var_dump($sort);

$arr = [5,2,3,6,1,4];
$sorter = new Sorter($arr);
$sort = $sorter->sort()->desc();
var_dump($sort);