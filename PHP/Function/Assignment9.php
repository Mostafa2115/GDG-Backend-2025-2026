<?php


$greet = function ($name) {
    return "Greetings";
};

$greet_arrow = fn($name) => "Greetings";

echo $greet("Osama");
echo "<br>";
echo $greet_arrow("Osama");
