<?php 
session_start();
if ($_SESSION['status'] == "invalid" OR empty($_SESSION['status'])){
    $_SESSION['status'] = "invalid";
    unset($_SESSION['email']);
    header('Location: index.php');
}

?>