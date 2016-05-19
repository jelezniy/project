<?php
include_once '../../includes/config.api';
$res = mysqli_query($mysqli, "SELECT * FROM `admin_menu` ");

    if($res){
            
            while($item = mysqli_fetch_assoc($res)){
    ?>
            <li>
                <a href=" <?php echo $item['link'];?>"title="<?php echo  $item['title'];?>">
                <i class=" <?php echo $item['iclass'];?>"></i>
                <?php echo $item['title'];?></a>
            </li>
            <?php

            }   
        
	echo '</ul>';
}
mysqli_close($mysqli);
