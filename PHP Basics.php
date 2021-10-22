<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class="container">
    this is my first php website
    </div>
    <?php
    define("PI", 3.14);  // Declaring constant
     echo "Hello World,Printed in php";
     // "echo" prints the data written in it

     // Variables
     $variable1 = 34;  // Declaring the variables
     $variable2 = 45;

     echo "<br>";   // New Line
     echo  $variable1 + $variable2;   // printing the variables

     // Operators
     // Arithmetic Operator
     echo "<br>";
     echo "Multiplication of two numbers is equal to : ";
     echo  $variable1 * $variable2;

     // Assignment Operator
     $Newvar = $variable1;
     echo "<br>";
     echo $Newvar;

     $Newvar += 101;
     echo "<br>";
     echo $Newvar;

     // echo "<h1> Camparision Operator <h1>";    (Inserting HTML)
     // Camprision Operator
     echo "<br>";
     echo var_dump(1!=4);
     echo "<br>";
     echo var_dump(1<=4);
     echo "<br>";
     echo var_dump(1>=4);

     // Logical Operator
     // $Myvar = (true) && (true);
     $Myvar = (true and false);
     echo "<br>";
     echo var_dump($Myvar);

     // Data Types
     /*
     $var = "this is a string"; // String
     $var = 67;   // Integer
     $var = 67.15;   // Float
     $var = true;    // Boolean
     */
    echo "<br>";
    echo PI;  // Constant


    ?>
</body>
</html>