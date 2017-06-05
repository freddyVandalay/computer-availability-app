<?php

session_start();

include "../templates/header.html";

include "../templates/_nav.html";

require "../../includes/db_connect.php";

require "../../includes/functions.php";

$content.="<h3>Staff Login</h3>";

$action = $_SERVER["PHP_SELF"]."?page=login";

$form_html = "
                                <form action='".$action."' method='POST'>
                                <label>Username <input type='text' name='username'></label>
                                <label>Password <input type='password' name='password'></label>
                                <input type='submit' name='submit' value='login'>";

$content.=$form_html;

$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = mysqli_real_escape_string($link, clean_input($_POST['username']));
        $password = mysqli_real_escape_string($link, clean_input($_POST['password']));

        if ((!empty($username)) && (!empty($password))){
                $sql = "SELECT * FROM users WHERE name='$username' AND password = MD5('$password')";

                $query = mysqli_query($link, $sql);

                if (mysqli_affected_rows($link) == 1){
                        $row = mysqli_fetch_array($query);
                        $_SESSION['username'] = $username;
                        $_SESSION['user_id'] = $row['user_id'];
                        //header('Location: ../index.php');
                        //echo 'hello';
                        echo "<script type='text/javascript'>window.location.href='../index.php'</script>";
						die();
                } else {
                        $message = $message."Login credentials not recognised: please try again. </br>";
                }

                if(empty($username)){
                        $message = $message."Please enter a valid username.</br>";
                }
                if(empty($password)){
                        $message = $message."Please enter a valid password.</br>";

                }
        }
}

echo $content;

include "../templates/footer.html";

?>