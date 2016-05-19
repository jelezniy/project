<?php
if (isset($_POST['Enter']))
    {
    $e_login = $_POST['e_login'];
    
    if(!preg_match("/^[A-ZА-Яa-zа-я][A-Za-zА-Яа-я0-9]{2,}$/u", $_POST['e_login'])){
        echo 'uncorect login';
    }
 else {
            
    $e_password = md5($_POST['e_password']);//как сделать проверку на пароль
    
    $query = mysqli_query($mysqli, "SELECT * FROM `asdat_stud9`.`users` WHERE login='$e_login'")or die(mysqli_error($mysqli));
    $user_data = mysqli_fetch_array($query);

    
   
if( $e_password == $user_data['password']){
    $_SESSION['login'] =  $e_login;  
    echo 'Приветствую'.' '.$e_login;
    $check == true;
    
    }
 else{
        echo "Неверный логин или пароль!!!";
  }      
 }    
}
   



if(isset($_POST['logout'])){
    unset($_SESSION['login']);
    session_destroy();
}
mysqli_close($mysqli);



if (isset($_SESSION['login'])){
    echo 'Вы уже авторизованы.';
}
else{
    echo '
    <form action="../includes/authorisation.php" method="post">
        <p>
            <label>Ваш логин:<br></label>
            <input name="login" type="text" size="15" maxlength="15">
        </p>

        <p>
            <label>Ваш пароль:<br></label>
            <input name="password" type="password" size="15" maxlength="15">
        </p>

        <p>
            <input type="submit" name="submit" value="Войти"
        </p>
 </form>
        <div id="registr"><a href="registration.php"></a></div>';
   
} 
    

?>