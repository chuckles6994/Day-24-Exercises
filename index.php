<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>HI!!!</h1>
    <?php
    $first_name = 'chuck';
    $last_name = 'elkins';

    echo "first name: {$first_name}";
    echo "<br>";
    echo "surname: {$last_name}"; 

    $birth = '18.4.1994';
    $height = '170cm';
    $favorit_dino = "petradactyl";
    echo "<br>";

    echo "we discovered a {$favorit_dino}";  
    echo "<br>";
    // has no outside effect:
    $a = 1;
    // there is no direct equivalent of constant:
    $a = 5;
    echo $a;

    // not into the console, but actually on the page:
    $variable; // defined, but not assigned
    echo '<h1>hey</h1>';
    echo ' there';
    // echo $a;
    function sayNumber()
    {
        // global variable $a is not accessible here:
        echo "Number<br>";
    }

    // unset($a);  removes the variable and its information

    sayNumber();
    // most equivalent to constant:
    define('MY_constant', 'my lovely constant');

    function sayMyConstant ()
    {
        echo MY_constant;
        define('MY_second_constant', 'second!<br>');

    }
    sayMyConstant();

    echo MY_second_constant;

    function raiseNumber ($number)
    {
        $number++;
        return $number;
    }

    echo raiseNumber(5);
    echo "<br>";

    define('Server_software', 'this server is running on Apache <br>');
    echo Server_software;

    function greet_world ()
    {
        echo 'Hello, world!';
    };
    greet_world();

    $whom = 'jinda';
    function greet ($whom) 
    {
        echo "Hello, $whom";
        greeting();
    };
    function greeting() 
    {
       echo "vfdv";
    };
      
    function sayA()
    {
        // global $a -->make the function see outside of itself 
    }

    function headline($header, $first = 1)
    {
        $result = "<h{$first}>{$header}</h{$first}";
        return $result;
    }
    echo headline ('Foo', 2);
    echo headline ('Bar');

greet($whom);

// associative arrays:
$a=[1,2,3];
 $dog = ['breed'=>'dachshund', 'color' => 'red', 'name' =>'Bandit'];

 echo "<br>";
 echo "<br>";
 echo "<br>";

 echo $dog["color"];
 echo "<br>";

$a[0]=5;
echo $a[0];

array_push($a, 4);

echo "<br>";
echo $a[3];

$a[] =5;
echo "<br>";
echo $a[4];
echo "<br>";

$owner_is_set = isset($dog['owner']);
$owner_is_empty = !isset($dog['owner']);//good to test if information has been properly filled-in
var_dump($owner_is_set);
var_dump($owner_is_empty);

foreach ($dog as $value) {
    echo "<p>{$value}</p>";
};

uasort($dog, function ($a,$b){
    $count_of_as_in1 = substr_count($a, 'a');
    $count_of_as_in2 = substr_count($b, 'a');


if($count_of_as_in1< $count_of_as_in2) {
    return -1;
} elseif($count_of_as_in1==$count_of_as_in2){
    return 0;
}elseif($count_of_as_in1>$count_of_as_in2) {
    return 1;
}
});
// foreach ($dog as $key => $value) {
//     echo "<p>Dog's {$a} is {$value}</p>";
// };


// String interpolation is only possible in quotes and single quotes
    ?>

    <?= "<h2>Uhhhh, hi?</h2" ?>

    <hr>
    <?php
        // echo "<div>Footer {$a}</div>";
        echo round(34.435345);
    //    echo $a;
    ?>

    <!-- give us info on the php version we are currently running: -->
    <!-- <?php phpinfo(); ?> -->
</body>

</html>