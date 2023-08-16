 

<?php
//Fizz Buzz Game
 /*for ($i = 1; $i < 101; $i++) {
    if ($i % 15 == 0) echo("FizzBuzz"."<br>");
    else if ($i % 3 == 0) echo("Fizz"."<br>");
    else if ($i % 5 == 0) echo("Buzz"."<br>");
    else echo ($i);}*/

//14-calculate the factorial of a given number 
function factorial($n) { 
    $ans = 1;   
    if($n === 0){
        return 1;
    }    
    for ($i = 2; $i <= $n; $i++) 
        $ans = $ans * $i; 
    return $ans; 
} 
echo(factorial(5));



    ?>

