<?php


function say_hello($name = 'buddy'){
	return "Hi there $name!";
}

echo say_hello('joe');
//default value is 'buddy' but as soon as we pass one name the default will be overwritten

function pp($value){
	echo "<pre>";
	print_r($value);
	echo "</pre>";
}

$arr = array(
	'name' => 'joe',
	'age' => 40,
	'ocupation' => 'teacher'
);

pp($arr);

// way 1 to do it
// function array_pluck($toPluck, $arr){
// 	$ret = array();

// 	foreach ($arr as $item) {
// 		$ret[] = $item[$toPluck];
// 	}

// 	//print_r($ret);
// 	return $ret;
// }

// way 2 to do it, it involves LOCAL SCOPE FOR FUNCTIONS, we use CLOSURES to fix it.
function array_pluck($toPluck, $arr){
	return array_map(function($item) use($toPluck){
		return $item[$toPluck];
	}, $arr);
}

$people = array(
	array(
	'name' => 'gab',
	'age' => 29,
	'ocupation' => 'esp'
	),
	array(
	'name' => 'oli',
	'age' => 28,
	'ocupation' => 'aussie'
	),
	array(
	'name' => 'lia',
	'age' => 31,
	'ocupation' => 'roman'
	),
);

// $plucked = array_pluck('age', $people);
// print_r($plucked);
$names = array_pluck('name', $people);
foreach ($names as $name) {
	echo $name;
}

