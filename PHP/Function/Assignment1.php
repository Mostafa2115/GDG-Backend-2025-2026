<?php

function greeting($name, $type = "")
{
    if ($type == "Male") {
        return "Hello Mr $name";
    } elseif ($type == "Female") {
        return "Hello Miss $name";
    } else {
        return "Hello $name";
    }
}


echo greeting("Osama", "Male");
echo "<br>";
echo greeting("Eman", "Female");
echo "<br>";
echo greeting("Sameh");
