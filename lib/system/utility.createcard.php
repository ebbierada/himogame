<?php
	// create component card - ( HTML Template )
	
	function createCard(	bool 	$display_header = true,
							string 	$title = '', 
							string 	$body = '', 
							bool 	$display_footer  = true,
							string 	$footer = '' ) 
	{
		$cardData = [
			'display_header'	=> $display_header,
			'title' 			=> $title,
			'body'				=> $body,
			'display_footer'	=> $display_footer,
			'footer'			=> $footer
		];
		// include 'template/card.php';
	};
?>