<?php
session_start();
ini_set('display_errors',1);
error_reporting(E_ALL);
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
   
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
// подключаемся к базе
    include ("config.api");
 
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['password']))
    {
        exit ("Извините, введённый вами login или пароль неверный.");
    }
    else {
        if ($myrow['password']==$password) {
                //если пароли совпадают, то запускаем пользователю сессию
                $_SESSION['login']=$myrow['login']; 
                $_SESSION['id']=$myrow['id'];
                echo "Вы успешно вошли на сайт! <a href='../index.php'>Главная страница</a>";
            }
         else {
                exit ("Извините, введённый вами login или пароль неверный.");
            }
    }
    ?>