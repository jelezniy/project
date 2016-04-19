<table id="table" class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>news_title</th>
        <th>text</th>
        <th>image</th>
        <th>category</th>
        <th>Редактировать</th>
        <th>Удалить</th>
      </tr>
    </thead>        
<?php include '../includes/config.api';
$try = mysqli_query($mysqli,"SELECT * FROM `asdat_stud9`.`news` ORDER by id DESC  ")or die(mysqli_error($mysqli));
while ($news = mysqli_fetch_assoc($try)) 
    {?>
    <tbody> 
        <tr>
            <th><?php echo $news['news_title'] ?></th>
            <th><?php echo $news['text'] ?></th>
            <th><?php echo $news['image'] ?></th>
            <th><?php echo $news['category'] ?></th>
            <th><a href="inc/edit_news.php?id=<?php echo $news['id'] ?>"><i class="fa fa-pencil-square-o"></i></a></th>
            <th><a href="inc/delete_news.php?id=<?php echo $news['id'] ?>"><i class="fa fa-times"></i></a></th>
        </tr>
    </tbody>    
<?php   
    }?>                          
</table>
<?php mysqli_close($mysqli);?>
