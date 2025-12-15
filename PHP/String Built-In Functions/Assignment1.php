<?php 
$str = substr($str, 0, $num_two).$let_one.substr($str, $num_two, $num_one).$let_two.substr($str, $num_two + $num_two);
echo $str;
