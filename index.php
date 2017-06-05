<?php

//include HTML header
include "templates/header.html";

//include navbar
include "templates/nav5.html";

//connect to mySQL db   
require "includes/db_connect.php";

//require custom functions file
require "includes/functions.php";

if(isset($_GET['page'])){
    $page = $_GET['page'];
} else {
    $page = 'home';
}

$content = "";

//changes page/view depending on navbar
switch($page){
    case 'home':
        include 'views/home.php';
        break;
    case 'floor_1':
    	include 'views/floor_1.php';
    	break;
    case 'floor_2':
        include 'views/floor_2.php';
        break;
    case 'total':
        include 'views/total.php';
        break;
    default :
        include 'views/404.php';
}

//close sql connection
mysqli_close($link);

//print content
echo $content;

//include footer
include "templates/footer.html";

?>