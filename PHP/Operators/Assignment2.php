<?php
$a = "10";
$b1 = (int) $a;
echo $b1 . "\n";
echo '"' . gettype($b1) . '"' . "\n";
$b2 = intval($a);
echo $b2 . "\n";
echo '"' . gettype($b2) . '"' . "\n";
$b3 = $a;
settype($b3, "integer");
echo $b3 . "\n";
echo '"' . gettype($b3) . '"' . "\n";
$b4 = $a + 0;
echo $b4 . "\n";
echo '"' . gettype($b4) . '"' . "\n";
$b5 = $a * 1;
echo $b5 . "\n";
echo '"' . gettype($b5) . '"' . "\n";
