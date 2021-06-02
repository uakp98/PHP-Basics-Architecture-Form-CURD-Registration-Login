<!DOCTYPE html>
<html>
<body>

<?php
	function test(){
		static $x=10;
		echo $x;
		$x++;
		
	}
	test();
	echo "<br>";
	test();
	echo "<br>";
	test();
	echo "<br>";
	test();
	echo "<br>";
	test();
		
?>

</body>
</html>