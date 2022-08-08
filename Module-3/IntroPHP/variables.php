
<?php
    /* require "testinclude.php";
    echo "Hello Welcome to PHP(HyperText Preprocessor)";
    echo "<br>";
    $name1 = "suman";
    $name2 = "suraj";
    echo "<br>";

    for($i = 1; $i <= 2; $i++)
    {
        echo ${"name".$i};
        echo "</br>";
    }
    echo "</br>";

    // echo $name1;
    // echo "</br>";
    // echo $name2;
    // echo "Defining Constants";
    echo "<h1>Defining Constants</h1>";
    define("TEN", 10);
    // echo "</br>";
    echo TEN;
    echo "<h1>Concatenation Approach</h1>";
    $fname = "Suraj";
    $lname = "HS";
    echo "first name : ".$fname."<br>last name: ".$lname;
    echo "</br>";
    // make font italic
    echo "<em>".$fname.$lname."</em>";
    echo "</br>";
    echo "<h1>$fname$lname<h1>";
    echo "<h2>".$fname.$lname."</h2>";
    echo "</br>";

    echo 'Hello I am using single quote';
    echo "</br>";
    echo "Here I am using double quote";
    echo "</br>";
    echo '"Hello Good Morning"';
    echo "</br>";
    echo "'Hello Single Quote'";
    echo "</br>";
    echo "\Hello Backslash";
    echo "</br>";
    $usn = 52;
    printf("Name: %s<br>USN: %d",$fname,$usn);
    echo "<h1>Switch Case</h1>";
    $choice = 2;
    switch($choice)
    {
        case(1):
            echo "Case 01";break;
        case(2):
            echo "Case 02";break;
        default:
            echo "Invalid Choice";
    }
    echo "</br>";
    echo $mname; */

    echo "<h1>Functions in PHP</h1>";

    function greeting($name)
    {
        echo "Hai Good Morning ".$name;
    }
    greeting("suraj");

    echo "<h1>Addition of two numbers</h1>";
    function add($a = 100, $b = 100)
    {
        return $a+$b;
    }
    echo add(10, 20);
    echo "<h1>Call by Value</h1>";
    $arg = 10;
    function increment(&$a)
    {
        global $arg;
        echo "a value is : ".$arg."<br>";
        $a++;
        echo "Function Inside a: ".$a."<br>";
        
    }
    increment($arg);
    echo $arg;


?>