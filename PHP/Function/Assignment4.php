<?php

function multiply(...$args)
{
    $result = 1;

    foreach ($args as $arg) {


        if (is_string($arg)) {
            continue;
        }

        if (is_float($arg)) {
            $arg = (int) $arg;
        }

        $result *= $arg;
    }

    return $result;
}

echo multiply(10, 20);
echo "<br>";
echo multiply("A", 10, 30);
echo "<br>";
echo multiply(100.5, 10, "B");
