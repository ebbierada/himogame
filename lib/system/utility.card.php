<?php

class Card {
	public $display_header;
	public $title;
	public $body;
	public $display_footer;
	public $footer;

	public function __construct(	bool 	$display_header = true,
									string 	$title = '',
									string 	$body = '',
									bool 	$display_footer = true,
									string  $footer = '' 	
	){
		$this->display_header = $display_header;
		$this->title = $title;
		$this->body =  $body;
		$this->display_footer = $display_footer;
		$this->footer = $footer;
	}

	public function render(): string {
        ob_start();
        include 'template/template.card.php'; 
        return ob_get_clean(); 
    }

    public function appendBodyContent(string $content): void {
        $this->body .= $content;
    }

}

?>