<!DOCTYPE html>
<html>
<body>

<?php
	$x=5;
	
	function test(){
		echo "<p>value of x is : $x</p>";
		
	}
	test();
	echo "<p>value of x is : $x which is print from outside from the function</p>";
	
	
	
	function test1(){
		$y=50;
		echo "<p>value of y is : $y</p>";
		
	}
	test1();
	echo "<p>value of y is : $y which is print from inside from the function</p>";


	//--------global keyword--------
	
	$p=15;
	$q=10;
	function test2(){
		global $p, $q;
		$q=$p+$q;
		//echo "<p>value of y is : $y</p>";
		
	}
	test2();
	//echo "<p>value of y is : $y which is print from inside from the function</p>";
	echo "The sum of the global variable is: $q";
?>

</body>
</html>