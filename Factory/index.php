<?php
include_once "Polisi.php";
include_once "Penjahat.php";
include_once "Rakyat.php";
include_once "charaFactory.php";

$hero = CharacterFactory::createCharacter("Polisi");
$villain = CharacterFactory::createCharacter("Penjahat");
$neutral = CharacterFactory::createCharacter("Rakyat");

echo "Polisi's name: " . $hero->getName() . "<br>";
echo "Penjahat's name: " . $villain->getName() . "<br>";
echo "Rakyat's name: " . $neutral->getName() . "<br>";
?>