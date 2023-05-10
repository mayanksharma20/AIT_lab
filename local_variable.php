<?php

function fun(){
	$x=5;	//local scope
	echo"<p>Variable x inside function is: $x</p>";

	echo"<p>Variable Y inside function is: $y</p>";
}
fun();
$x=10;

echo"<p>Variable x inside function is $x</p>";

?>