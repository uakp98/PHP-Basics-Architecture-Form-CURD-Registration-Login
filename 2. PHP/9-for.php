<!DOCTYPE html>
<html>
<body>

<?php  
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
echo "<hr>";

$y=1;
while($y < 5){
	echo "The number is: $y <br>";
	$y++;
}
echo "<hr>";

$z=1;
do{
	echo "The number is: $z <br>";
	$z++;
}while($z < 5);

echo "<hr>";
$cars=array("volvo","honda","bmw");
foreach($cars as $value){
	echo "$value <br>";
}
?>  

</body>
</html>