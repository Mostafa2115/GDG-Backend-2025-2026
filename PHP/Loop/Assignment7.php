<?php

$mix = [1, 2, "A", "B", "C", 3, 4];

$numbersCount = 0;
$lettersCount = 0;

foreach ($mix as $item) {

    if (is_numeric($item)) {
        echo $item . "\n";
        $numbersCount++;
    } else {
        $lettersCount++;
    }
}

echo "\"$numbersCount Numbers Printed\"\n";
echo "\"$lettersCount Letters Ignored\"\n";
