<?php
include_once "character.php";
class Hero implements Character {
    public function getName(): string {
        return "Polisi";
    }
}
?>