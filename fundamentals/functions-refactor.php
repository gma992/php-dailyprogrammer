<?php

//functions should do ONE THING, not too much logic. 20 lines -> code smell
function is_logged_in(){
	if (!isset($_SESSION['username'])){
		return false;
	} else {
		return true;
	}
}

function is_logged_in_refactored(){
	return isset($_SESSION['username']);
}

function validate_user_credentials(){
	//validate that against the records
	if($username === USERNAME && $password === PASSWORD){
	//credentials are correct

	//login + set session
	$_SESSION['username'] = $username;
	header("Location: sessions-about.php");
	} else {
		$status = "Incorrect login credentials.";
	}
	
}

function validate_user_credentials_refactored($username, $password){
	return ($username === USERNAME && $password === PASSWORD);
	//the if else statement is in the other page, if this pass through
}




?>
