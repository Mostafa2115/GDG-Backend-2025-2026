<?php

function calculate(int $num_one, int $num_two)
{
    return ($num_one + $num_two) + 0.0;
}

echo calculate(20, 10);
echo "<br>";
echo gettype(calculate(20, 10));
