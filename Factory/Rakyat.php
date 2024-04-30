<?php
include_once "character.php";

class Neutral implements Character {
    public function getName(): string {
        return "Rakyat";
    }
}

?>