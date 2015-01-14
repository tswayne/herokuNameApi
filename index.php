<?php
header('Content-Type: application/json');

$numbers = array();
$index = 0;

while ($index < 10)
{
	$rand = rand(1, 30);
	if (!in_array($rand, $numbers)) {
		$numbers[] = $rand;
		$index++;
	}	
}

echo json_encode($numbers);
