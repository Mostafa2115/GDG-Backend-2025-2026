<?php
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;
print_r(array_merge($chars, str_split($char . $char . $char)));
