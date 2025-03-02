<?php

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

    //Dynamic Properties
    public $strengthModifier;
    public $dexterityModifier;
    public $constitutionModifier;
    public $intelligenceModifier;
    public $wisdomModifier;
    public $charismaModifier;

    //Proficiencies Properties
    public $proficienciesSkills;

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
        int 	$charisma = 0,

        array   $proficienciesSkills = []
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

        // Initialize other properties (e.g., HP, AC, MP)
        $this->strengthModifier = floor(($strength - 10) / 2);
        $this->dexterityModifier = floor(($dexterity - 10) / 2);
        $this->constitutionModifier = floor(($constitution - 10) / 2);
        $this->intelligenceModifier = floor(($intelligence - 10) / 2);
        $this->wisdomModifier = floor(($wisdom - 10) / 2);
        $this->charismaModifier = floor(($charisma - 10) / 2);

        $this->proficienciesSkills = $proficienciesSkills;
        
        // $this->healthPoints = $this->calculateMaxHP();
        
        // $this->magicPoints = $this->calculateMaxMP();
        // $this->initiative = $this->calculateInitiative();

    }

    // Methods (Functions within the Class)

    // Calculate Armor Class
    public function armourClass() {
        $ac = 10;
        switch ($this->characterClass) {
            case 'barbarian':
                $ac += $this->dexterityModifier + $this->constitutionModifier;
                break;
            case 'monk':
                $ac += $this->dexterityModifier + $this->wisdomModifier;
                break;
            default:
                $ac += $this->dexterityModifier;
        }
        return $ac;
    }



    // Calculate Max HP
    public function calculateMaxHP() {
        // Example calculation (replace with your game's logic)
        $hitDie = $this->getHitDie();
        return ($hitDie + $this->constitution) * $this->level;
    }

    // Calculate Initiative
    public function initiative(){
        return $this->dexterityModifier;
    }

    // Calculate Proficiency Bonus
    public function proficiencyBonus() {
        return floor(($this->level + 3) / 4);
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

    // Get hit point
    public function getHitpoint() {
        include 'config/appdata/character_classes.php';
        return $characterClasses[$this->characterClass]['hitpoint'] + $this->constitutionModifier;
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

    public function getAbilityModifier(string $ability){
        return $this->{$ability.'Modifier'};
    }

    public function displayModifier(string $ability) {
        $modifier = $this->{$ability.'Modifier'};
        return ($modifier >= 1) ? '+'.$modifier : $modifier;
    }

    public function modifierLevel(string $ability) {
        $modifier = $this->{$ability.'Modifier'};
        return ($modifier >= 1) ? 'high' : 'low';
    }
}

?>