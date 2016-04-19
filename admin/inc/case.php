<?php
$page = $_GET['page'];
switch ($page)
{
case "":
    $case = "Главная";
    echo '<h1>Просто котик)</h1><br>
     <img src="dist/img/cat.jpg">';
    break;    

case "menu":
    $case = "Структура меню";
    require_once 'tables/menu.php';
    break;

case "all_users":
    $case = "Все пользователи";
    require_once 'tables/all_users.php';
    break;

case "add_user":
    $case = "Добавить пользователя";
    require_once 'tables/add_user.php';
    break;

case "view_news":
    $case = "Обзор новостей";
    require_once 'tables/view_news.php';
    break;

case "add_new":
    $case = "Добавить новость";
    require_once 'tables/add_new.php';
    break;

default :
    $case = "Несуществующая страница";
    require_once 'tables/404.php';
    break;
}
