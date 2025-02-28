<!-- Template for Card utility -->
<section class="card">
	<?php if ($this->display_header): ?>
		<div class="card-header">
			<h2><?= $this->title ?></h2>
		</div>
	<?php endif;?>

	<div class="card-body"><?= $this->body ?></div>

	<?php if ($this->display_footer): ?>
		<div class="card-footer"><?= $this->footer ?></div>
	<?php endif;?>
</section>