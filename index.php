<?php
	// library
	require_once 'lib/system/utility.php';

	// application data
	require_once 'model/fetch_json_data.php';
	$characterRaces = fetchData('config/appdata/character_races.json');

	// Page
	require_once 'view/page.main.php';

?>