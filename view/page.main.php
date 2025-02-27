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
			<?php echo 	createCard(
							title:'My Card', 
							body: 'body contetn', 
							footer: 'this is foot'
						); ?>

			<section class="card">
				<div class="card-header">
					<h2>title</h2>
				</div>
				<div class="card-body">body content</div>
				<div class="card-footer">footer content</div>
			</section>
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