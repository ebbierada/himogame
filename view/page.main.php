<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="view/css/core.style.css">
	<script src="view/js/script.js" defer></script>
	<title>Dungeon and Dragon</title>
</head>
<body>
	<main>
		<section id="stat_block" class="scroll">
			<span class="sys_label">Stat Block</span>
			<?php include 'view/component/player_stat_block.php'; ?>
		</section>
		<section id="primaryContainer">
			<span class="sys_label">Main</span>
			<?php
				
				$diceRollCard = new Card(
						title:	'Dice Roll',
						display_footer: false
				);
				
				$diceRollButton = new Button(
					label: 'Roll D20',
					name: 'diceRollBtn',
					type: 'button',
					id:	'diceRollBtn'
				);
				$selectRole = '
					<select name="selectRole" id="selectRole">
						<option value="player" defer>Player</option>
						<option value="npc">Non-playable character</option>
					</select>';
				$selecAbility = '
					<select name="selectAbility" id="selectAbility">
						<option value="strength">Strength</option>
						<option value="dexterity">Dexterity</option>
						<option value="intelligence">Intelligence</option>
						<option value="wisdom">Wisdom</option>
						<option value="charisma">Charisma</option>
						<option value="constitution" selected>Constitution</option>
					</select>';
				$selectSkill = '
					<select name="selectSkill" id="selectSkill">
					</select>	
				';
				$diceRollCard->appendBodyContent($selectRole);
				$diceRollCard->appendBodyContent($selecAbility . $selectSkill);
				$diceRollCard->appendBodyContent($diceRollButton->render());
				
				//render Card
				echo $diceRollCard->render();
			?>
			<section>
				<h3>Dice Roller (Custom)</h3>
				<select name="dice" id="selectDice">
					<option value="4">D4</option>
					<option value="6" selected>D6</option>
					<option value="8">D8</option>
					<option value="10">D10</option>
					<option value="12">D12</option>
					<option value="20">D20</option>
				</select>
				<?php
					$rollerBtn = new Button(
						label: 'Roll Dice',
						id: 'customDiceRoller'
					);
					echo $rollerBtn->render();
				?>
			</section>
		</section>
		<section id='gameHistory'>
			<span class="sys_label">main-aside (test)</span>
			<div>
				<h2>Game History</h2>
				<div id="messagesContainer"></div>

			</div>
			<div>
				<span class="sys_label">php outcome (test)</span>
				<p>
					<?php
						include 'model/weapon.php';
					?>
				</p>
				
			</div>
		</section>
	</main>
</body>
</html>