<?php
session_start();
//ini_set('display_errors',1);
//error_reporting(E_ALL);
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (isset($_POST['avatar'])) { $password=$_POST['avatar']; if ($avatar =='') { unset($avatar);} }

if (empty($login) or empty($password)) 
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
//удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
    $password = md5($password);
// подключаемся к базе
    include ("../../includes/config.api");
 
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['password']))
    {
        exit ("Ах ты ЖУК!!! Админка только для Админа.");
    }
    else {
        if ($myrow['password']==$password) {
                //если пароли совпадают, то запускаем пользователю сессию
                $_SESSION['login']=$myrow['login']; 
                $_SESSION['id']=$myrow['id'];
                $_SESSION['avatar']=$myrow['avatar'];
                echo "Привей Мой Повелитель! Кликни на ссылочку чтобы попасть в  <a href='../index.php'>Админку</a>";
            }
         else {
                exit ("Ах ты ЖУК!!! Админка только для Админа.");
            }
    }
    ?>