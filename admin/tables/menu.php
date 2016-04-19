<table id="table" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Link</th>
            <th>Parent ID</th>
            <th>Редактировать</th>
        </tr>
    </thead>        
<?php include '../includes/config.api';
$try = mysqli_query($mysqli,"SELECT * FROM `asdat_stud9`.`menu` ORDER by id")or die(mysqli_error($mysqli));
while ($menu = mysqli_fetch_assoc($try)) 
    {?>
    <tbody> 
        <tr>
            <th><?php echo $menu['id'] ?></th>
            <th><?php echo $menu['title'] ?></th>
            <th><?php echo $menu['link'] ?></th>
            <th><?php echo $menu['parent_id'] ?></th>
            <th><a href="inc/edit_menu.php?id=<?php echo $menu['id'] ?>"><i class="fa fa-pencil-square-o"></i></a></th>
        </tr>
    </tbody>               
<?php   
    }?>                          
</table>
<?php mysqli_close($mysqli);?>