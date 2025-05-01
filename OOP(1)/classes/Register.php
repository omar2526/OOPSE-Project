<?php
require_once"Admin.php";
require_once"DB.php"; // Make sure this exists and contains a query() method

// Connect to database
$db = new Database();
echo "connecting...";

// Create admin object
$admin = new Admin($db);

// Create a user object (you could also define a User class or use stdClass)
$user = new stdClass();
$user->phoneNumber = '+201097161117985';
$user->Email = 'test@gmail.com';
$user->username = 'test';
$user->password = '123';
$user->confirmPassword = '123';

// Call register function
$admin->Register($user);
?>