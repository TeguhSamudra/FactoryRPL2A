<?php
include_once "character.php";

class Villain implements Character {
    public function getName(): string {
        return "Penjahat";
    }
}

?>