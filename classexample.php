<?php

$paramArray = [
	["name"=>"Ryan", "age"=>1],
	["name"=>"John", "age"=>2],
	["name"=>"Sue", "age"=>3],
	["name"=>"Rick", "age"=>4]
];

/*
 * A function that take an associative array of people with names and ages and returns average age
 *
 * @param array $personArray an array of people
 * @return int $averageAge average age of people in the array
 */

function averageAge(array $personsArray) : float {

	$totalAge = 0;

	foreach($personsArray as $person) {

		//PHP_EOL creates a new line when outputting values from the script.
		echo $person["name"] . " is " . $person["age"] . PHP_EOL;
		$totalAge += $person["age"];
	}
	// make sure $totalAge is the correct number
	echo "total age is " . $totalAge . PHP_EOL;


	return ($totalAge / count($personsArray));
}

echo ("the average age is " . averageAge($paramArray) . PHP_EOL);
