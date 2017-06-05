<?php

session_start();

setcookie( session_name(), "", time()-3600, '/');
session_unset();
session_destroy();

echo "<script type='text/javascript'>window.location.href='../index.php'</script>";
die();
?>