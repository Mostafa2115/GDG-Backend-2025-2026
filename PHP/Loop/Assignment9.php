<?php

$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

$start = $help_num / $help_num;        
$end   = $help_num - ($help_num / $help_num); 

for ($i = $start; $i <= $end; $i++) {
    echo "\"$names[$i]\"\n";
}
