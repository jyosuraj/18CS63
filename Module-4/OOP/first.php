<?php
    /* class Calculation
    {
        // properties.
        public $a,$b,$c;

        // methods.
        public function sum()
        {
            $this->c = $this->a + $this->b;
            return $this->c;
        }     
    }
    $c1 = new Calculation();
    $c1->a = 10;
    $c1->b = 10;
    echo "Sum: ".$c1->sum();  */

    /* // constructors in php
    class greeting
    {
        public $name;
        function __construct($name)
        {
            $this->name = $name;
        }
        public function greet()
        {
            printf("Good Morning %s",$this->name);
        }
    }

    $g = new greeting("Suraj");
    $g->greet(); */

    /* // static members
    class person
    {
        public static $name = "Suraj";

        public static function display() 
        {
            printf("Name: %s", self::$name);
        }
    }
    // accessing static property.
    echo person::$name."<br>";
    // accessing static method.
    person::display(); */

/*     // inheritance.
    class Fruit
    {
        public $name, $color;

        function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }
        public function intro()
        {
            printf("Fruit Name: %s<br>Fruit Color: %s<br>",$this->name, $this->color);
        }
    }
    class Mango extends Fruit
    {
        
    }
    $m = new Mango("BigMango", "Yellow");
    $m->intro(); */

    /* // Polymorphism.
    class Vehicle
    {
        public function horn()
        {
            printf("Vehicle horn<br>");
        }
    }
    class Bike extends Vehicle
    {
        public function horn()
        {
            printf("Bike horn<br>");
        }
    }

    $v = new Vehicle();
    $v->horn();

    $b = new Bike();
    $b->horn(); */

    /* // interface: To achieve multipleinheritance.
    interface A
    {
        function greeting();
    }
    interface B 
    {
        function leaving();
    }
    class Boy implements A, B
    {
        function greeting()
        {
            printf("Hai, Good Morning<br>");
        }
        function leaving()
        {
            printf("Bye, Good Night<br>");
        }
    }
    $b = new Boy();
    $b->greeting();
    $b->leaving(); */

/*     // Exception Handling.
    function CheckNumber($number)
    {
        if($number > 1)
        {
            throw new Exception("Value must 1 or below");
        }
    }
    try
    {
        CheckNumber(1);
        printf("Number is less than equal to 1");
    }
    catch(Exception $e)
    {
        printf("Error Message: %s",$e->getMessage());
    } */

    /* // procedural error handling.
    if(file_exists("file.txt"))
    {
        $file = fopen("file.txt", "r");
    }
    else
    {
        die("ERROR: file doesn't exist");
    } */
?>