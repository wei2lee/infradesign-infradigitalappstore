<?php 

error_reporting(0); 
// error_reporting(E_ALL); 

$isDev=f alse; $actual_link="http://" . $_SERVER[ "HTTP_HOST"] . $_SERVER[ "REQUEST_URI"]; 

if (strpos($actual_link, '127.0.0.1') !==false) $isDev=true; 
if (strpos($actual_link, 'localhost') !==false) $isDev=true; 
if (strpos($actual_link, 'staging') !==false) $isDev=true; 

$config=array( 
	"smtp"=> array( 
		"user" => "alpi5373", 
		"pass" => "Id!QN6;^3{Bg", 
		"host" => "mail.alpina.com.my", 
		"port" => 587 ), 
	"isDev" => $isDev ); 

?>