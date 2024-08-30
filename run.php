<?php

// Load inputs.json with variables
$json_content = file_get_contents('inputs.json');

// Decode json into array
$data = json_decode($json_content, true);

// Generate question html page
include_once ('generate-question.php');
