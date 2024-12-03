<?php
require 'FileManager.php';
$file = new \HandlingFile\FileManager('sinh_vien.csv','a+');
var_dump($file->readCsv());
//$students = [
//    ['ninh duc anh', 12, 'ninhducanhninh@gmail.com'],
//    ['john doe', 15, 'johndoe@example.com'],
//    ['jane smith', 14, 'janesmith@example.com']
//];
//
//foreach ($students as $student) {
//    $file->writeToCsv($student);
//}
