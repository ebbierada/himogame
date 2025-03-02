<?php
    include 'model/character.php';
    // class for character
    include_once 'config/appdata/character_classes.php';
    
    // create player's character
    $playerCharacter = new Character(
        name: 'Badger Balder',
        characterClass: 'barbarian',
        race: 'elf',
        level: 1,
        strength: 15,
        dexterity: 13,
        intelligence: 8,
        wisdom: 10,
        constitution: 14,
        charisma: 12,
        proficienciesSkills: ['athletics','intimidation']
    );
    // standard array point: 15, 14, 13, 12, 10, 8.

    // ability and skill
?>
<section>
    <div class="stat character-info">
        <h3>Character info</h3>
        <dl>
            <dt>Name</dt>
                <dd><?=$playerCharacter->name?></dd>
            <dt>Race</dt>
                <dd><?=ucfirst($playerCharacter->race)?></dd>
            <dt>Class</dt>
                <dd><?=ucfirst($playerCharacter->characterClass)?></dd>
        </dl>
    </div>
    <div class="stat character-info-2">
        <div class="badge">
            <p class="badge-title">AC</p>
            <p><?=$playerCharacter->armourClass()?></p>
        </div>
        <div class="badge">
            <p class="badge-title">Initiative</p>
            <p><?=$playerCharacter->initiative()?></p>
        </div>
        <div class="badge">
            <p class="badge-title">Proficiency</p>
            <p><?=$playerCharacter->proficiencyBonus()?></p>
        </div>
        <div class="badge">
            <p class="badge-title">HP</p>
            <p><?=$playerCharacter->getHitpoint()?></p>
        </div>
        <div class="badge">
            <p class="badge-title">XP</p>
            <p>0</p>
        </div>
        <div class="badge">
            <p class="badge-title">Level</p>
            <p><?=$playerCharacter->level?></p>
        </div>
    </div>
    <div class="stat ability-info">
        <h3>Abilities / Skills</h3>
        <?php
            include 'config/appdata/character_abilities_skills.php';

            echo '<ul class="list-ability">';
            foreach ($characterSkills as $ability => $skills) {
                $abilityScore = $playerCharacter->{$ability};
                $abilityModifier = $playerCharacter->getAbilityModifier($ability);
                $displayAbilityModifier = $playerCharacter->displayModifier($ability);
                $modLevel = $playerCharacter->modifierLevel($ability);


                echo '<li>' . ucfirst($ability) . ': ';
                echo "<span class=\"ability-score\" data-ability-score=\"$abilityScore\"> $abilityScore </span>";
                echo "<span class=\"modifier level-$modLevel\" data-ability-modifier=\"$abilityModifier\">$displayAbilityModifier</span>";

                    // Skill list
                    echo '<ul class="list-skills">';
                    if(!empty($skills)){
                        echo '<span class="label-skill">Skills</span>';
                    }
                    foreach ($skills as $skill) {
                        // profieciencyMarker
                        $proficiencyMarker = "";
                        if(in_array($skill,$playerCharacter->proficienciesSkills) ) {
                            $proficiencyMarker = "<span class='proficiency-marker'>PRO</span>";
                        }
                        
                        echo "<li>" .ucfirst($skill) . $proficiencyMarker."</li>";
                    }
                    echo '</ul>';
                echo '</li>';
            }
            echo '</ul>';
        ?>
    </div>
    <div class="stat spell-info">
        <h3>Spells</h3>
        <dl>
            <dt>Cantrips</dt>
                <dd>Eldritch Blast</dd>
            <dt>Spells Known</dt>
                <dd>Charm Person, Hex</dd>
        </dl>
    </div>
</section>