
document.addEventListener('DOMContentLoaded', ()=>{
    const selectAbility = document.getElementById('selectAbility');
    const selectSkill   = document.getElementById('selectSkill');
    const abilitySkills = {
        strength: ['athletics'],
        dexterity: ['acrobatics','sleight of hand','stealth'],
        intelligence: ['arcana','history','investigation','nature','religion'],
        wisdom: ['animal handling','insight','medicine','perception','survival'],
        charisma: ['deception','intimidation','performance','persuasion'],
        constitution: []
    };

    selectAbility.addEventListener('change',()=>{
        const ability = selectAbility.value;
        selectSkill.innerHTML = '';
        abilitySkills[ability].forEach(skill => {
            const option = document.createElement('option');
            option.value = skill;
            option.textContent = skill.charAt(0).toUpperCase() + skill.substring(1);
            selectSkill.appendChild(option);
        });
    });
});
