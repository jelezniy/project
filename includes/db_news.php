<?php
include ('config.api');

$num = 3;
$page = $_GET ['page'];
$result00 = mysqli_query($mysqli, "SELECT COUNT * FROM `news`");
$temp = mysqli_fetch_array($result00);
$posts = $temp [0];
$total = (($posts -1) / $num) + 1;
$total = intval ($total);
$page = intval ($page);
if (empty($page) or $page < 0) $page = 1;
if ($page > $total) $page = $total;
$start = $page * $num = $num;



$query = mysqli_query($mysqli, "SELECT * FROM `asdat_stud9`.`news` ORDER BY id DESC LIMIT $start, $num");
$news = mysqli_fetch_array ($query);
do 
    {
        echo "<img src=$news ['image']>";
        echo "<br>";
        echo $news ['news_title'];
        echo "<br>";
        echo $news ['text'];
        echo "<br>";
        echo "<br>";
    }
while ($news = mysqli_fetch_array($query)); ?>
 
    
            