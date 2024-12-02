<?php

class UserController
{
    public function __construct(public MessageService $messageService)
    {
    }

    public function sendEmail($username):void
    {
        $this->messageService->sendMessage("Hello",$username);
    }
}
include 'EmailService.php';
$messageService = new EmailService();
$userController = new UserController($messageService);
$userController->sendEmail("DucAnh");

