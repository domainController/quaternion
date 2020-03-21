<?php

/* I've created a hard link of this file pointing to /var/www/html/array.php
*/


// echo $shells[1];

$cars = ['Honda', 'Toyota', 'Volvo'];
$cars[3]='Subaru';
// echo $cars[3];
$cars[]='Aston Martin';

// echo $cars[4];
// echo count($cars);
// print_r($cars);

// var_dump($cars);

// Associate arrays

$people = array('Brad' => 35, 'Patrice' => 42, 'Will' => 74);

// echo $people['Patrice'];
// print_r($people);
//var_dump($people);

$shells = array(
	array('beta SL', 300, flux),
	array('atom', 300, flux),
	array('stretchrainshadow', 150, willow green),
	 );

// $shells = array('beta SL', 'zeta SL', 'atom', 'stretchrainshadow', 'nano light');

echo $shells[1][0];
?> 







































