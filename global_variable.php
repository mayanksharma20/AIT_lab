<?php
$y=100;	//global
function myTest(){
	global $x;
	global $y;
	$x=5;
	echo"<p>Variable X inside function is :$x</p>";
	echo"<p>Variable Y inside function is :$y</p>";
	}
myTest();
$x=10;

	echo"<p>Variable X outside function is :$x</p>";
	echo"<p>Variable Y outside function is :$y</p>";
?>