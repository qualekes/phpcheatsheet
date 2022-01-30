<?php

#THIS IS MY PHP QUICK REFERENCE GUIDE
#WHAT IS PHP -------- PHP is a server side language which stands for (PHP HYPERTEST PREPROSSER).PHP is used to make an web page dynamic, in other words makes a website into a web application. AN web application has the ability to connect to a Database such as MySQL or Oracle. Some of the Strength's of PHP include Performance, Scalability, Database Intergration, Libraries, and Supports Object Oriented Programming.

//EXAMPLE OF USING PHP =====   you have a eccomerece store and want to keep track of the user(customer) actions such as a shopping cart. PHP HAS A superglobal variable called $_SESSION and $_COOKIE that helps the website keep track of your journey on the website. $_COOKIE used for less dangerous things such as saving someones preference on clothing. $_SESSION is used for login systems.


## SUPERGLOBALS

// $GLOBALS = An array of all global variables that allows you to access global variables inside a function

// $_SERVER = An array of server enviroment variables. 
// echo $_SERVER['SERVER_PORT'];
// To list all the $_SERVER parameters, simply do:
// foreach ($_SERVER as $parm => $value)  echo "<h1>$parm</h1> = '$value'\n";

//$_GET = An array of variables passed to the script via get method
// ENTER THIS IN THE URL AFTER THE ? mark FOR EXAMPLE localhost:8888?name=Qualeke;
// $uio = $_GET["name"];
// echo $uio;
//for security purposes wrapped your code in htmlspecialchars to stop xss attacks;
// echo htmlspecialchars($uio);

//
// echo "<pre>";
// echo var_dump($_ENV);
// echo "</pre>";





#WORKING WITH FILES

//
// echo __DIR__;




#PROCEDURAL PHP
// variable
// $test = "<br> qualeke is a programmer <br>";
// echo $test;

// number increments with ++ and --
// $b = 3;
// echo $b++ . " <br>";
// $b--;
// echo $b;

//string function
// explode string function.
// print_r(explode(" ", $test));
//makes array
//php data types 


//float or double
// $float = 4;
// echo gettype($float);

//string 
// $stringg = "hey my name is lewis";
// echo gettype($stringg);

//integer 
// $int = 5;

// boolean 
// $trueOrFalse = true;

#TESTING VARIABLE TYPES 

// $a = 5;
// echo gettype($a); // integer 


// $a = 5.3;
// echo gettype($a); // double or float

// $a = "qualeke is a string";
// echo gettype($a); // string

// $a = ["this", "is", "a", "array"]; //array
// echo gettype($a);

// $a = true;
// echo gettype($a); //boolean, true or false

#CHECK IF VARIABLE IS SET  
// $a = null;

// if (isset($a)) {
//    echo "a is set";
// } else {
//    echo "a is not set";
// }


//string functions  

// $String = "THis is a string with white space
// ";
// echo $String;

// echo strtoupper($String);

//array 
// $cars = ["bmw", "sierra", "charger"];  // indexed array

//array functions 

// sort($cars);  // sort alphabetically
// echo var_dump($cars);

// rsort($cars);
// echo var_dump($cars); // reverse alphabetically


//associative arrays
// $names = [     // firstname is the key, Qualeke is the value
//    "firstname" => "Qualeke",
//    "lastname" => "Singleton"
// ];


//loop through associative array with keys and values
// foreach ($names as $name => $value) {
//    echo " <h3>$value is the   $name </h3>";
// }


#CONDITIONALS   

// if (10 < 5) {
//    echo "greater";
// } else {
//    echo "false";
// }



//Object 
// class Ass
// {
// }

//resource 


//function 
// function myFunc()
// {
//    return "this is a function";
// }

//  LOOPS 
// for loop
// for ($i = 0; $i < 9; $i++) {
//    echo "<h3>$i</h3>";
// }
// //while loop
// $i = 1;
// while ($i <= 10) {
//    echo "<h5>$i</h5>";

//    $i++;
// }

//do while loop 
// $i = 5;
// do {
//    echo "<h1>$i</h1>";
//    $i += 5;
// } while ($i <= 50);

// do {
//    echo $i . '<br/>';
//    $i++;
// } while ($i < 20);

//reg expression
// $test = "This is a test";
//If true, php will return 1, 0 if false

// echo preg_match("/nontest/", $test);
// echo "<pre>";
// var_dump(preg_match("/test/", $test));
// echo "</pre>";


// function using parameters and arguments

// function yourFunc($fname, $lname)
// {
//    echo "This function was created by $fname $lname";
// }

// function using parameters and arguments addition and substitution 

// function addSum($a, $b)
// {
//    $theSum = $a + $b;
//    echo $theSum;
// }

// addSum(1, 9);

// yourFunc("qualeke", "singleton");
// echo myFunc();

// 
// $moonMan = "man on the moon";


// function myMoon()
// { //Gather the $moonMan variable from outside the scope
//    echo $GLOBALS['moonMan'];
//    // 
// }

// myMoon();



## OBJECT ORIENTED PHP
// class Basket
// {
//    public $itemsTotal;
//    public $shippingCost;


//    public function total()
//    {
//       $subtotal = $this->itemsTotal + $this->shippingCost;
//       return $subtotal;
//    }
// }

// $basket1 = new Basket;
// $basket1->itemsTotal = 5;
// $basket1->shippingCost = 43.94;
// var_dump($basket1);
// echo $basket1->itemsTotal;
// echo "<br/>";
// echo $basket1->shippingCost;
// echo "<br>";
// echo $basket1->total();


// class Trouble
// {
//    public $test;
//    public $age;


//    public function __construct($test, $age)
//    {
//       $this->test = $test;
//       $this->age = $age;
//    }
// }

// $troubleman = new Trouble("testt", 55);

// echo $troubleman->test . " is " . $troubleman->age;

// class User
// {
//    private $age;

//    public function __construct($age)
//    {
//       $this->age = $age;
//    }

//    public function getAge()
//    {
//       return $this->age;
//    }
// }

// $user1 = new User(55554);
// echo $user1->getAge();




//CODING CHALLENGES
//FIZZBUZZ 
for ($i = 1; $i <=  100; $i++) {
   if ($i % 3 === 0 && $i % 5 === 0) {
      echo "FizzBuzz <br/>";
   } elseif ($i % 3 === 0) {
      echo "Fizz <br/>";
   } elseif ($i % 5 === 0) {
      echo "Buzz <br/>";
   } else {
      echo $i . "<br/>";
   }
   echo "\n";
}
