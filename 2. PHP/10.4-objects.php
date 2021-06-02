<!DOCTYPE html>
<html>
<body>

<?php
	class Person{
		public $firstname;
		public $lastname;
		public $age;
		
		public function __construct($firstname,$lastname,$age){
			$this->firstname=$firstname;
			$this->lastname=$lastname;
			$this->age=$age;
		}
		
		public function hello(){
			return "I am $this->firstname $this->lastname , $this->age years old";
		}
	}
	$person1=new Person('Apurba','Kumar',25);
	$person2=new Person('Debdip','Dutta',21);

	
	echo $person1->hello();
	echo "<br>";
	echo $person2->hello();
	
		
?>

</body>
</html>