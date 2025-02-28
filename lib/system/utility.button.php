<?php
	// Button Class

class Button {
	private $label;
	private $autofocus;
	private $disable;
	private $name;
	private $type;
	private $value;

	private $class;
	private $hidden;
	private $id;

	private $onclick;

	public function __construct(
		string 	$label = '',
		bool 	$autofocus = false,
		bool 	$disable = false,
		string 	$name = '',
		string 	$type = '',
		string 	$value = '',

		string 	$class = '',
		bool 	$hidden  = false,
		string 	$id = '',
		string 	$onclick = '',
	){
		$this->label = $label;
		$this->autofocus = $autofocus;
		$this->disable = $disable;
		$this->name = $name;
		$this->type = $type;
		$this->value = $value;

		$this->class = $class;
		$this->hidden = $hidden;
		$this->id = $id;
		$this->onclick = $onclick;
	}

	public function render(): string {
		$button = '<button';

		if (!empty($this->id)) {
			$button .= ' id="' . htmlspecialchars($this->id) . '"';
		}

		if (!empty($this->class)) {
			$button .= ' class="' . htmlspecialchars($this->class) . '"';
		}

		if (!empty($this->onclick)) {
			$button .= ' onclick="' . htmlspecialchars($this->onclick) . '"';
		}

		$button .= '>';
		$button .= htmlspecialchars($this->label);
		$button .= '</button>';

		return $button;
	}

}
?>