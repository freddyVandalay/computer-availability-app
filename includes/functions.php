<?php

function clean_input($data){
	//remove redundant characters
	$data = trim($data);
	//remove backslashes
	$data = stripcslashes($data);
	//replace special chars with HTML
	$data = htmlspecialchars($data);
	return $data;
};

function is_logged_in(){
	if (isset($_SESSION['username'])){
		return true;
	}
}

?>