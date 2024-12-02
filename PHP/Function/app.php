<?php
//$eq = fn($a, $b) => $a === $b;
//
//var_dump($eq(1,1));
//$array =[1,2,3,4,5];
//$newArray = array_map(fn($number) => $number * 2,$array);
//var_dump($newArray);
//function _test(): Closure
//{
//    return fn()=>"Hello";
//}
//
//$test = _test(); // == $test = fn()=>"Hello";
//echo $test();

$message ="Hello";
$greeting = function() use ($message):void{
    echo $message;
};

$greeting();
