<?php
	// create component card - ( HTML Template )
	
	function createCard(string $title, string $body, string $footer){
		$cardData = [
			'title' => $title,
			'body'	=> $body,
			'footer'=> $footer
		];

		include 'view/component/card.php';
	};
?>