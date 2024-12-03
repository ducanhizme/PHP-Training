<?php

$pdo = require 'connect.php';

$student =[
    'name' => "ninh duc anh",
    'age' => 12,
    'email'=> "ninhducanhninh@gmail.com"
];
$sql = 'insert into students(name, age,email,)values(?,?,?)';
$insertStatement = $pdo->prepare($sql);
//execute  the time that bind the value instead of at the time execute
//$insertStatement->bindValue(':name',$student['name']);
//$insertStatement->bindValue(':age',$student['age']);
//$insertStatement->bindValue(':email',$student['email']);
//$insertStatement->execute();

$insertStatement->bindParam(':name',$student['name']);
$insertStatement->bindParam(':age',$student['age']);
$insertStatement->bindParam(':email',$student['email']);
$student['name'] = 'Duc An';
$student['age'] =12;
$insertStatement->execute();


