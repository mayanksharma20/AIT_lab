/*Program of function method in php*/

<html>
<head>
	<title>Writing php function which returns value</title>
</head>
<body>
	<?php
		function addfunction($num1,$num2){
			$sum=$num1+$num2;
			return $sum;
		}
		$return_value=addfunction(1000,2000);
		echo"</br>";

		echo"Returned value from the function: $return_value";
	?>
</body>
</html>