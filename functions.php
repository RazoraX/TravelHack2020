<?php

$resultArray = $_POST['result'];
$temp = [];

foreach ($resultArray[0] as $key => $value) {
	$temp[$value] = $resultArray[1][$key]; 
}

$oldArray = $temp;
sort($temp, SORT_NUMERIC);

$data = json_decode(file_get_contents('data/ways.json'));
$description = (array) $data->finalDescription;

$newArray = [];
foreach ($oldArray as $key => $value) {
	$newArray[$key]['way'] = $key;
	$newArray[$key]['value'] = $value;
	$newArray[$key]['text'] = $description[$key]; 
}




function cmp($a, $b)
{
    return $a['value'] > $b['value'];
}

usort($newArray, "cmp");

$newArray = array_reverse($newArray);

print_r(json_encode($newArray));

die;
?>