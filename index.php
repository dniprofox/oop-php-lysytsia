<?php 

// Person 1
/*
$person1_name = 'Peter';
$person1_speciality = 'Programmer';
$person1_age = 25;

function person1_hello($name, $spec, $age){
	echo "Hello! My name is $name. I am $spec and $age years old. ";
}

person1_hello($person1_name, $person1_speciality, $person1_age);
echo "<br><br>";
*/

// Person 2
/*
$person2_name = 'Jane';
$person2_speciality = 'Web-designer';
$person2_age = 23;

function person2_hello($name, $spec, $age){
	echo "Hello! My name is $name. I am $spec and $age years old. ";
}

person2_hello($person2_name, $person2_speciality, $person2_age);
*/














// class Person {
// 	public $name;
// 	public $speciality;
// 	public $age;
// }

// $person1 = new Person;

// $person1->name = 'Peter';
// $person1->speciality = 'Progammer';
// $person1->age = 25;

// echo $person1->name;
// echo $person1->speciality;
// echo $person1->age;

// function person1_hello($name, $spec, $age){
// 	echo "Hello! My name is $name. I am $spec and $age years old. ";
// }














// class Person {
// 	public $name;
// 	public $speciality;
// 	public $age;

// 	public function greeting(){
// 		// echo "Hello! My name is $name. I am $spec and $age years old. ";
// 		echo "Hello! My name is " . $this->name  . ". I am " . $this->speciality  ." and " . $this->age  ." years old. ";
// 	}
// }

// $person1 = new Person;

// $person1->name = 'Peter';
// $person1->speciality = 'Progammer';
// $person1->age = 25;

// // $person1->greeting($person1->name, $person1->speciality, $person1->age);
// $person1->greeting();








// задаем класс
class Person {

		public $name;
		public $speciality;
		public $age;

			// public function __construct(){
			// 	echo "New person just created";
			// }


		  // ф-ция конструктор
	public function __construct($name, $spec, $age){

		  // свойства для каждой пресоны
			$this->name = $name;
			$this->speciality = $spec;
			$this->age = $age;
	}


  		// ф-ция приветствие
	public function greeting(){

			// echo "Hello! My name is $name. I am $spec and $age years old. ";
		echo "Hello! My name is " . $this->name  . ". I am " . $this->speciality  ." and " . $this->age  ." years old. ";
	}
}

   //передаем данные в ф-цию и запускаем приветствие
	$person1 = new Person('Peter', 'Programmer', 25);
		$person1->greeting();

	echo "<br><br><hr>";

	$person2 = new Person('Jane', 'Web-designer', 22);
			$person2->greeting();

	echo "<br><br><hr>";		

	$person3 = new Person('Paul', 'Menager', 33);

			$person3->greeting();	

 	echo "<br><br><hr>";

 	$person4 = new Person('Sam', 'Doctror', 30);

			$person4->greeting();

 
		// $person1->name = 'Peter';
		// $person1->speciality = 'Progammer';
		// $person1->age = 25;

		// $person1->greeting();





?>