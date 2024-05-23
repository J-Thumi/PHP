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
?> 
</pre>

<p>When converting into arrays, most data types converts into an indexed array with one element.</p>

<p>NULL values converts to an empty array object.</p>
</body>
</html>