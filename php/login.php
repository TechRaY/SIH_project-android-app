<?php

require_once 'include/user.php';

$username = "";
$password = "";
$email = "";

if(isset($_POST['username'])){
	$username = $_POST['username'];
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
}


// Instance of a User class
$userObject = new User();

// User Login
if(!empty($username) && !empty($password)){
	$hashed_password = md5($password);	
    $json_array = $userObject->loginUsers($username, $hashed_password);

    echo json_encode($json_array);
}

?>