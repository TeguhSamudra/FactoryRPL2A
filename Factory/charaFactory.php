<?php
include_once "character.php";
class CharacterFactory {
    public static function createCharacter(string $characterType): Character {
        switch ($characterType) {
            case "Polisi":
                return new Hero();
            case "Penjahat":
                return new Villain();
            case "Rakyat":
                return new Neutral();
            default:
                throw new Exception("Unknown character type requested.");
        }
    }
}
?>