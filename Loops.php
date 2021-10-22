<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops and Statemets</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: grey;
        margin: auto; 
        padding: 23px;
    }
</style>
<body>
    <div class="container">
    <h1> Let's Learn About PHP </h1>
    This is a container
    <h3> Your party status is here: </h3>
    <?php
    /* $message = "What is your age?";
       echo "<script type = 'text/javascript'>alert('$message');</script>";
       (Notification)   */

    /* echo '<script type = "text/javascript">';
       echo 'prompt("javascript")';
       echo '</script>';    (Taking input)   */
    
    // If Else Statement   
    $age = 34;   
    if($age > 18){
        echo "You can go to the party";
    }
    else{
        echo "You can't go to the party";
    }
    echo "<br>";
    
    // Array
    $array = array("Python","C++","Java","Nodejs");
    echo $array[0];
    echo "<br>";
    echo count($array);

    // Iterating Arrays using while loop
    $a = 0;
    while ($a < count($array)) {
        echo "<br>Programming Languages are: ";
        echo $array[$a];
        $a++;
    }

    // Loops
    // While Loop
    $a = 1;
    while ($a <= 10) {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }

    // Do while loop
    $a =0;
    do {
        echo "<br>Programming Languages are: ";
        echo $array[$a];
        $a++;
    } while ($a < count($array));

    // For loop
    for ($i=1; $i <= 10; $i++) { 
        echo "<br>Value of a is: ";
        echo $i;
    }

    // Foreach loop
    foreach ($array as $value) {
        echo "<br>The value from Foreach loop is: ";
        echo $value;
    }

    // Function
    function print5(){
        echo "<br>FIVE";
    }
    print5();

    function print_number($number){
        echo "<br>Your number is: ";
        echo $number;
    }
    print_number(365);
    print_number(56);
    echo "<br>";
    
    // String
    // "." is the string concatination in the PHP
    $str = "This is a string";
    echo $str;
    $len = strlen($str);
    echo "<br>The length of the string is: ". $len ." and the number of words is: ". str_word_count($str) .".  Thank you!!";
    // Reverse the string
    echo "<br>The reversed string is: ". strrev($str) .".  Thank you!!";    
    echo "<br>The search of 'is' in the string is at position: ". strpos($str , "is") .".  Thank you!!";
    echo "<br>The replaced string is: ". str_replace("a", "an" ,$str) .".  Thank you!!";

    ?>
    </div>
</body>
</html>