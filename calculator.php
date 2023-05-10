<html>
<head>
	<title>Writing php function which returns value</title>
</head>
<body>
	<?php
		global $x;
		$x=1000;
		global $y;
		$y=2000;


	//addition
		function addfunction($num1,$num2){
			$sum=$num1+$num2;
			return $sum;
		}
		$return_value=addfunction($x,$y);
		echo"</br>";

		echo"addition is: $return_value";


	//subtraction				
		function subfunction($num1,$num2){
			$sub=$num2-$num1;
			return $sub;
		}
		$return_value=subfunction($x,$y);
		echo"</br>";

		echo"subtraction is: $return_value";


	//multiplication
		function multfunction($num1,$num2){
			$mult=$num1*$num2;
			return $mult;
		}
		$return_value=multfunction($x,$y);
		echo"</br>";

		echo"Multiplication is: $return_value";

	
	//division
		function divfunction($num1,$num2){
			$div=$num2/$num1;
			return $div;
		}
		$return_value=divfunction($x,$y);
		echo"</br>";

		echo"division is: $return_value";

	?>
</body>
</html>