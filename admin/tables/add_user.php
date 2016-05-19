<?php include_once '../../includes/config.api';
if (isset($_POST['submit']))
    {   $login = strip_tags(trim($_POST['login']));
        $password = strip_tags(trim($_POST['password']));
        $password = md5($password);
        $avatar = $_POST['avatar'];
        $result = mysqli_query($mysqli,"INSERT INTO `asdat_stud9`.`users` (`login`, `password`,`avatar`) VALUES ('$login','$password','$avatar')") or die(mysqli_error($mysqli)); 
        mysqli_close($mysqli);
        echo 'Пользователь добавлен<br><a href="http://stud9.asdat.info/admin/index.php?page=add_user">Назад, мой Повелитель</a>';
    }?>   
<form name="insertuser" method="POST" action="tables/add_user.php">
    <p>
        <label>Логин</label><br>
        <input type="text" name="login" id="login" size="20" required>
    </p>
    <p>
        <label>Пароль</label><br>
        <input type="text" name="password" id="password" size="20" required>
    </p>
    <p>
        <label>Выбрать аватар</label><br>
        <input type="file" name="avatar" id="avatar" multiple accept="image/*">
    </p>
    <p> 
        <input type="submit" name="submit" id="submit" value="Добавить">
    </p>
</form>
