<?php

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
</body>
</html>