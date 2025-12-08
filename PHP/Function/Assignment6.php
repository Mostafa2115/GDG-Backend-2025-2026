<?php

function calculate($num1, $num2, $op = "add")
{

    $op = strtolower($op);


    if ($op == "a" || $op == "add") {
        return $num1 + $num2;
    } elseif ($op == "s" || $op == "subtract") {
        return $num1 - $num2;
    } elseif ($op == "m" || $op == "multiply") {
        return $num1 * $num2;
    } else {
        return "This Operation Is Not Supported";
    }
}


echo calculate(10, 20);
echo "<br>";
echo calculate(10, 20, "a");
echo "<br>";
echo calculate(10, 20, "s");
echo "<br>";
echo calculate(10, 20, "subtract");
echo "<br>";
echo calculate(10, 20, "multiply");
echo "<br>";
echo calculate(10, 20, "m");
