<?php session_start();
include '../../includes/config.api';
$id = $_GET['id'];  
$try = mysqli_query($mysqli,"DELETE FROM news WHERE id='$id'") or die(mysqli_error($mysqli)); 
echo 'Новость удалена';
mysqli_close($mysqli);?>
