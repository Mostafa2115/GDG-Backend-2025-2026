<?php
$genre = "Hack And Slash";

switch ($genre) {
    case "Hack And Slash":
    case "Action Adventure":
        echo "I Recommend God of War Games";
        break;
    case "RPG":
    case "MMORPG":
        echo "I Recommend The Witcher Games";
        break;
    case "Platformer":
    case "Metroidvania":
        echo "I Recommend Castlevania Games";
        break;
    default:
        echo "I Recommend Playing Something Else";
        break;
}
