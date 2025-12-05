<?php
$a = "Elzero";
$b = "Web";
$c = "School";

$d = $a . " " . $b . " " . $c;

$d = ($a . " ") . ($b . " ") . $c;

$d = $a;
$d .= " " . $b;
$d .= " " . $c;


$d = "";
$d .= $a . " ";
$d .= $b . " ";
$d .= $c;

echo $d;
