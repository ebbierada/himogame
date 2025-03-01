<?php
// class for character

class Character {

    public $name;
    public $characterClass;
    public $level;
    public $race;

    // Ability Scores (Consider Private or Protected)
    public $strength;
    public $dexterity;
    public $constitution;
    public $intelligence;
    public $wisdom;
    public $charisma;

    // Constructor (Initialize Properties)
    public function __construct(
        string 	$name,
        string 	$characterClass,
        int 	$level,
        string 	$race,
        int 	$strength = 0,
        int 	$dexterity = 0,
        int 	$constitution = 0,
        int 	$intelligence = 0,
        int 	$wisdom = 0,
        int 	$charisma = 0
    ) {
        $this->name = $name;
        $this->characterClass = $characterClass;
        $this->level = $level;
        $this->race = $race;
        $this->strength = $strength;
        $this->dexterity = $dexterity;
        $this->constitution = $constitution;
        $this->intelligence = $intelligence;
        $this->wisdom = $wisdom;
        $this->charisma = $charisma;

        // // Initialize other properties (e.g., HP, AC, MP)
        // $this->healthPoints = $this->calculateMaxHP();
        // $this->armorClass = $this->calculateArmorClass();
        // $this->magicPoints = $this->calculateMaxMP();
        // $this->initiative = $this->calculateInitiative();

    }

    // Methods (Functions within the Class)

    // Calculate Max HP
    public function calculateMaxHP() {
        // Example calculation (replace with your game's logic)
        $hitDie = $this->getHitDie();
        return ($hitDie + $this->constitution) * $this->level;
    }

    // Calculate Armor Class
    public function calculateArmorClass() {
        // Example Calculation (replace with your game's logic)
        // This example is very basic.
        return 10 + $this->dexterity;
    }

    // Calculate Max MP (if applicable)
    public function calculateMaxMP(){
        //Example Calculation.
        if($this->characterClass == "Wizard"){
            return $this->level * $this->intelligence;
        } else {
            return 0;
        }
    }

    // Calculate Initiative
    public function calculateInitiative(){
        return $this->dexterity;
    }

    // Get Hit Die (Example - Implement your own logic)
    public function getHitDie() {
        switch ($this->characterClass) {
            case 'Barbarian':
                return 12;
            case 'Fighter':
                return 10;
            case 'Wizard':
                return 6;
            // Add other classes
            default:
                return 8; // Default hit die
        }
    }

    // Example Method: Display Character Info
    public function displayCharacterInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Class: " . $this->characterClass . "<br>";
        echo "Level: " . $this->level . "<br>";
        echo "Race: " . $this->race . "<br>";
        echo "HP: " . $this->healthPoints . "<br>";
        echo "AC: " . $this->armorClass . "<br>";
        echo "MP: " . $this->magicPoints . "<br>";
        echo "Initiative: " . $this->initiative . "<br>";
        echo "Strength: " . $this->strength . "<br>";
        echo "Dexterity: " . $this->dexterity . "<br>";
        echo "Constitution: " . $this->constitution . "<br>";
        echo "Intelligence: " . $this->intelligence . "<br>";
        echo "Wisdom: " . $this->wisdom . "<br>";
        echo "Charisma: " . $this->charisma . "<br>";
    }
}

?>