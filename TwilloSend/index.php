<?php 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once "vendor/autoload.php"; 
 
use Twilio\Rest\Client; 
 echo "Hello From Neelkumar Patel
You Will Receive Mssg Soon ";
$sid    = "AC61af1e611f8e3d6facae1b69ece20860"; 
$token  = "030f0093d6aeed136f804126a1a276ed"; 
$twilio = new Client($sid, $token); 

$message = $twilio->messages 
                  ->create("+12019892905", // to 
                           array( 
                               "from" => "+15173058381",       
                               "body" => "Hello from Neelkumar Patel CS 643 Fall 2018 " 
                           ) 
                  ); 
 
