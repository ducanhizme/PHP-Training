<?php
include 'MessageService.php';
class EmailService implements MessageService
{

    function sendMessage($message, $receiver) :void
    {
       echo "Email sent to " . $receiver . " with Message=" . $message;
    }
}