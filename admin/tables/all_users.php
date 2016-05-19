<table id="table" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Логин</th>
            <th>Пароль</th>
            <th>Аватар</th>
            <th>Редактировать</th>
            <th>Удалить</th>
        </tr>
    </thead>        
<?php include '../includes/config.api';
$try = mysqli_query($mysqli,"SELECT * FROM `asdat_stud9`.`users` ORDER by id DESC  ")or die(mysqli_error($mysqli));
while ($users = mysqli_fetch_assoc($try)) 
    {?>
    <tbody> 
        <tr>
            <th><?php echo $users['login'] ?></th>
            <th><?php echo $users['password'] ?></th>
            <th> <a href="#"><i class="fa fa-bug"></i></a></th>
            <th><a href="inc/edit_user.php?id=<?php echo $users['id'] ?>"><i class="fa fa-pencil-square-o"></i></a></th>
            <th><a href="inc/delete_user.php?id=<?php echo $users['id'] ?>"><i class="fa fa-times"></i></a></th>
        </tr>
    </tbody>               
<?php   
    }?>                          
</table>
<?php mysqli_close($mysqli);?>



