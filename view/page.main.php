<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="view/css/core.style.css">
	<title>Dungeon and Dragon</title>
</head>
<body>
	<main>
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
				
				$diceRollCard->appendBodyContent($diceRollButton->render());

				echo $diceRollCard->render();
			?>
		<select name="selectAbility" id="selectAbility">
			<option value="Strength">Strength</option>
			<option value="Dexterity">Dexterity</option>
			<option value="Intelligence">Intelligence</option>
			<option value="Wisdom">Wisdom</option>
			<option value="Charisma">Charisma</option>
			<option value="Constitution">Constitution</option>
		</select>
		</section>
		<section id='gameHistory'>
			<span class="sys_label">main-aside (test)</span>
			<div>
				<h2>Game History</h2>
				<div id="messagesContainer"></div>
			</div>
		</section>
	</main>
</body>
</html>