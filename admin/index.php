<?php
session_start();

require_once "../includes/config.api";

if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (isset($_POST['avatar'])) { $password=$_POST['avatar']; if ($avatar =='') { unset($avatar);} }

if (isset($_SESSION['login']))
    {
    include "content.php";
    }
else {
      require_once "authorisation.php";
     }
mysqli_close($mysqli);
?>





















