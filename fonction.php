<?php

function simplefunction(){
	echo 'Zendesk';
}

// simplefunction();

function sayHello($name = 'Average Joe'){
	echo "Hello $name<br>";
}

//	sayHello('Pat');
//	sayHello();


function addnumbers($nm1, $nm2){
 	return $nm1 + $nm2;
}

echo addnumbers(46, 940);

?>
