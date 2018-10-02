<?php 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once "vendor/autoload.php"; 
 
use Twilio\Rest\Client; 
 echo "Hello You Will Recive Msg Soon From Twilio";
$sid    = "AC4d23ac0e8a3a4b478da03182d9b0615d"; 
$token  = "94157f81e1c0a8400a9be02310bc4b79"; 
$twilio = new Client($sid, $token); 

$message = $twilio->messages 
                  ->create("+14128807092", // to 
                           array( 
                               "from" => "+18782189688",       
                               "body" => "hello from Raj Patel CS 643 Fall 2018 " 
                           ) 
                  ); 
 
