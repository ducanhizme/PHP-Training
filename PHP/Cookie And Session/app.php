<?php
const ONE_WEEK = 7 * 86400;

$returning_visitor = false;

if (!isset($_COOKIE['return'])) {
    setcookie('return', '1', time() + ONE_WEEK);
} else {
    $returning_visitor = true;
}

echo $returning_visitor ? 'Welcome back!' : 'Welcome to my website!';
session_start();
//assign value to session
$_SESSION['name'] = 'Ninh Duc Anh';
//get value from session
echo $_SESSION['name'];
//remove session
unset($_SESSION['name']);
echo $_SESSION['name']; // get error
