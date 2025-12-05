<?php

function customErrorHandler($errno, $errstr, $errfile, $errline)
{
    echo "Custom Error\n";
    return true;
}
set_error_handler("customErrorHandler");
$a = $b;
$f = file("Not_A_File");
include("Not_A_File");
