<?php
require 'CustomException.php';
function checkNum($number): true
{
    if($number>1) {
        throw new CustomException("Value must be 1 or below");
    }
    return true;
}
try {
    checkNum(33);
    echo 'If you see this, the number is 1 or below';
} catch(CustomException $e) {
    echo 'Message: ' .$e->errorMessage();
}



