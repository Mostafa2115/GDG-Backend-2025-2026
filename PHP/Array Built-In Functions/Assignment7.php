<?php
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];


next($names);
next($names);

next($names);
next($names);

echo current($names) . "<br>"; 
reset($names);

echo current($names) . "<br>"; 
reset($names);
next($names);
next($names);

echo current($names) . "<br>"; 
next($names);
next($names);
next($names);

// Write Line Here
next($names);

echo current($names) . "<br>"; // "Mahmoud"
