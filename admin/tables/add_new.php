<?php include_once '../../includes/config.api';
if (isset($_POST['submit']))
    {   $news_title = strip_tags(trim($_POST['news_title']));
        $text = strip_tags(trim($_POST['text']));
        $image = strip_tags(trim($_POST['image']));
        $category = $_POST['category'];    
        $result = mysqli_query($mysqli,"INSERT INTO `asdat_stud9`.`news` (`news_title`, `text`,`image`, `category`) VALUES ('$news_title','$text','$image', '$category')") or die(mysqli_error($mysqli)); 
        mysqli_close($mysqli);
        echo 'Статья добавлена<br><a href="http://stud9.asdat.info/admin/index.php?page=add_new">Назад, мой Повелитель</a>';
    }?>   
<form name="insert" method="POST" action="tables/add_new.php">
    <p>
        <label>Название</label><br>
        <input type="text" name="news_title" id="news_title" size="60" required>
    </p>
    <p>
        <label>Текст новости</label><br>
        <textarea name="text" id="text" cols="59" rows="20"  required></textarea>
    </p>
    <p>
        <label>Вставить картинку</label><br>
        <input type="file" name="image" id="image" multiple accept="image/*">
    </p>
    <p>
        <label>Выбор категории</label><br>
        <input type="radio" name="category" value="kinonews" id="category">kinonews<Br>
        <input type="radio" name="category" value="musicnews" id="category">musicnews<Br>
    </p>
    <p> 
        <input type="submit" name="submit" id="submit" value="Занести данные">
    </p>
</form>


