<?php

session_start();

//connect to mySQL db
require "../includes/db_connect.php";

//require custom functions file
require "../includes/functions.php";

if(!is_logged_in()){
    header('Location: views/login.php');
}

if(isset($_GET['page'])){
    $page = $_GET['page'];
} else {
    $page = 'home';
}

//include HTML header
include "templates/header.html";

//include navbar
include "templates/nav.html";

$content = "";

//changes page/view depending on navbar
switch($page){
    case 'home':
        include 'views/home.php';
        break;
    case 'computers':
        include 'views/computers.php';
        break;
    case 'map':
        include 'views/map.php';
        break;
    case 'logout':
        include 'views/logout.php';
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