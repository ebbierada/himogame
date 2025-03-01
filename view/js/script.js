
// Ability and Skill selection
const selectRole = document.getElementById('selectRole');
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

//Game Message Display function
const messagesContainer = document.getElementById('messagesContainer');

function formatMessage(msg,type){
    const format = {
        'standard': msg,
        'diceRoll': `${selectRole.value} roll a ${msg} (${selectSkill.value})`
    }

    return format[type];
}

function displayMessage(msg, type = 'standard'){
    const messageLine = document.createElement('p');
    messageLine.textContent = formatMessage(msg,type);
    messagesContainer.appendChild(messageLine);
} 


//Roll dice button function
const rollDiceBtn = document.getElementById('diceRollBtn');

function diceRoll(side = 20) {
    return Math.floor(Math.random() * side) + 1;
}

rollDiceBtn.addEventListener('click',()=>{
    let result = diceRoll();
    //Check result if natural 1 or 20
    if([1,20].includes(result)){
        result = 'NAT'+result;
    }
    displayMessage(result,'diceRoll');
});

// Roll custom dice button function
const customDiceRollBtn = document.getElementById('customDiceRoller');
customDiceRollBtn.addEventListener('click',()=>{
    const diceSide = document.getElementById('selectDice');
    const result = diceRoll(diceSide.value);
    displayMessage(result);
});
