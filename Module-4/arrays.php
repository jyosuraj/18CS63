<?php
    echo "<h1>Arrays in PHP</h1>";
    // $a = array();
    // $a[] = 10;
    // echo "<br>";  
    // echo $a[0];
    // echo "<br>";
    // $days = array("Mon", "Tue", "Wed");
    // for($i = 0; $i < count($days); $i++)
    // {
    //     echo $days[$i];
    //     echo "<br>";
    // }
    // echo "<br>";
    // echo "<pre>";
    // print_r($days);
    // echo "</pre>";
    // echo "<br>";
    // echo "<pre>";
    // print_r($c);
    // echo "</pre>";
    // echo "<br>";
    // $d = array( array("name" => "suman", "usn" => 51),
    // array("name" => "suraj", "usn" => 52),);
    // echo "<pre>";
    // print_r($d);
    // echo "</pre>";
    // echo "<br>";
    // array_keys($c);
    // print_r(array_keys($c));
    $c = array("Mon" => 1, "Tue" => 2, "Wed" => 3, "Fri" => 4);
    unset($c["Mon"]);
    if(isset($c["Mon"]))
    {
        echo "True";
    }
    else
    {
        echo "False";
    }
    $days = array("C", "B", "A");
    echo "<pre>";
    print_r($days);
    echo "<pre>";
    sort($days);
    echo "<pre>";
    print_r($days);
    echo "<pre>";
    foreach ($days as $key => $value) {
        echo $key." = ".$value."<br>";
    }
    echo "Hello World";
?>