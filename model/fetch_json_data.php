<?php

function fetchData($filePath) {
    $jsonString = file_get_contents($filePath);
    if ($jsonString === false) {
        return null; // Or handle the error as needed
    }

    $data = json_decode($jsonString, true);
    if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
        return 'Error Fetching JSON file: '.$filePath.' JSON error:'.json_last_error_msg();
    }

    return $data;
}

?>