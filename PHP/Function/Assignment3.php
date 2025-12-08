<?php

function sum_all(...$nums)
{
    $sum = 0;

    foreach ($nums as $n) {
        if ($n == 5) {
            continue;
        }

        if ($n == 10) {
            $n = 20;
        }

        $sum += $n;
    }

    return $sum;
}

echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo "<br>";
echo sum_all(5, 10, 5, 10); // 40
