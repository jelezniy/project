<?php session_start();
include '../../includes/config.api';
$id = $_GET['id'];  
$try = mysqli_query($mysqli,"DELETE FROM users WHERE id='$id'") or die(mysqli_error($mysqli)); 
echo 'Пользователь удален';
mysqli_close($mysqli);?>