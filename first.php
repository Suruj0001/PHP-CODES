<?php
// echo "My First PHP script ! <br>";
// echo "My name is Suruj <br>";
// echo "My Roll no is 7050 <br>";

// $color = "red";
// $x = 5;
// $y = 10.5;
// echo "My car is " . $color .  "<br>"; //  use . if you are putting variable inside a string
// echo $x "<br>";

// $x = 5985;
// var_dump($x); // its returns the datatype of the variable

// $cars = 
// array("Volvo" , "BMW" , "Toyota");
// var_dump($cars);
// output -- array(3) { [0]=> string(5) "Volvo" [1]=> string(3) "BMW" [2]=> string(6) "Toyota" }

# Classes and objects are the two main aspects of object-oriented programming.

#A class is a template for objects, and an object is an instance of a class.

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();

?>
