<?php
$chars = ["A", "B", "C"];

array_push($chars, "D");
print_r($chars);

$chars = ["A", "B", "C"];
$chars[] = "D";
print_r($chars);

$chars = ["A", "B", "C"];
$chars = array_merge($chars, ["D"]);
print_r($chars);

$chars = ["A", "B", "C"];
array_splice($chars, count($chars), 0, "D");
print_r($chars);
