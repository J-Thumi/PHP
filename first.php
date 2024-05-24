<?php
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>";
var_dump($y);

echo "<br>";

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

echo "<br>";

$x = true;
var_dump($x);

echo "<br>";

$x = 10.365;
var_dump($x);

echo "<br>";

$x = 5985;
var_dump($x);

echo "<br>";

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
  
  $myCar = new Car("red", "Volvo");
  var_dump($myCar);
  //echo $myCar.message()

  echo "<br>";

  $x = "Hello world!";
$x = null;
var_dump($x);

$x = 5;
$x = (string) $x;
var_dump($x);

var_dump($x); 

$name="John Doe";
define('NAME',"Constant Yoshi");
$statement1="My name is ";
$fullStatement=$statement1.$name;

echo "\"hello\"";
 echo $name[0];

 echo strlen($name);
 echo strtolower($name);
 echo strtoupper($name);
 echo str_replace('D','W',$name);


 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>I AM LEARNING PHP</h1>
    <H2><?php echo($name); ?></H2>
    <H2><?php echo(NAME); ?></H2>
    <H2><?php echo($fullStatement); ?></H2>
    <H2><?php echo('Hello, ' .$fullStatement); ?></H2>


    <?php
    $a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);


//min and max
echo(min(0, 150, 30, 20, -8, -200));
echo(max(0, 150, 30, 20, -8, -200));

//math
echo(pi());


//The abs() function returns the absolute (positive) value of a number:
echo(abs(-6.7));


//The sqrt() function returns the square root of a number:
echo(sqrt(64));

//The round() function rounds a floating-point number to its nearest integer:
echo(round(0.60));
echo(round(0.49));


//The rand() function generates a random number:

echo(rand());
//To get more control over the random number, you can add the optional min and max parameters
// to specify the lowest integer and the highest integer to be returned.
//For example, if you want a random integer between 10 and 100 (inclusive), use rand(10, 100):
  echo(rand(10,100));
  //For a complete reference of all math functions, go to our complete PHP Math Reference.
//The PHP math reference contains description and example of use, for each function.


//A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
//A valid constant name starts with a letter or underscore (no $ sign before the constant name).
//Note: Unlike variables, constants are automatically global across the entire script.
//To create a constant, use the define() function.
//define(name, value, case-insensitive);
//name: Specifies the name of the constant
//value: Specifies the value of the constant
//case-insensitive: Specifies whether the constant name should be case-insensitive. 
//Default is false. Note: Defining case-insensitive constants was deprecated in PHP 7.3. PHP 8.0 accepts only false, 
//the value true will produce a warning.
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
//You can also create a constant by using the const keyword.
const MYCAR = "Volvo";
echo MYCAR;

//const are always case-sensitive
//define() has has a case-insensitive option.
//const cannot be created inside another block scope, like inside a function or inside an if statement.
//define can be created inside another block scope.

//From PHP7, you can create an Array constant using the define() function.
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];

//PHP has nine predefined constants that change value depending on where they are used, 
//and therefor they are called "magic constants".
//These magic constants are written with a double underscore at the start and the end, 
//except for the ClassName::class constant.
//__CLASS__	If used inside a class, the class name is returned.	
//__DIR__	The directory of the file.	
//__FILE__	The file name including the full path.	
//__FUNCTION__	If inside a function, the function name is returned.	
//__LINE__	The current line number.	
//__METHOD__	If used inside a function that belongs to a class, both class and function name is returned.	
//__NAMESPACE__	If used inside a namespace, the name of the namespace is returned.	
//__TRAIT__	If used inside a trait, the trait name is returned.	
//ClassName::class	Returns the name of the specified class and the name of the namespace, if any.


$Car=array("BMW","Mark","TX");
$BMW=array("Name"=>"BMW","Model"=>"x550","year"=>2023);

?> 
</pre>

<p>When converting into arrays, most data types converts into an indexed array with one element.</p>

<p>NULL values converts to an empty array object.</p>
</body>
</html>