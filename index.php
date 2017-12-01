<?php
include_once ('vendor/autoload.php');

use Components\SelectQueryBuilder;

$table = 'newTable';
$arrayColums = ['id', 25, 2543, 'assad'];

try {
    $obj = new SelectQueryBuilder($table);
    $obj->colums($arrayColums)->order('id')->limit(10)->get();
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
}