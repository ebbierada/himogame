<!-- card component -->
<!-- deprecated -->
<?php
	$cardData = $cardData ?? [];
?>
<section class="card">
	<div class="card-header">
		<h2><?= $cardData['title'] ?></h2>
	</div>
	<div class="card-body"><?= $cardData['body'] ?></div>
	<div class="card-footer"><?= $cardData['footer'] ?></div>
</section>