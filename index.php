<?php
include_once ('vendor/autoload.php');

use Components\SelectQueryBuilder;

$table = 'newTable';
$arrayColums = array('id', 25, 2543, 'assad');

try {
    $obj = new SelectQueryBuilder($table);
    $obj->colums($arrayColums)->order('id')->limit(10);
    $obj->get();
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
}