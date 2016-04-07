<?php
//ini_set('display_errors',1);
//error_reporting(E_ALL);
//include ("../includes/config.api"); 
$res = mysqli_query($mysqli, "SELECT * FROM `menu` WHERE parent_id='0' ");
    if($res){
            echo '<ul>';
            while($item = mysqli_fetch_assoc($res)){
    ?>
            <li>
				<a href=" <?php echo $item['main']?'/':$item['link'];?>" 
					title="<?php echo  $item['title'];?>" class="selected"> 
					<?php echo $item['title'];?>
				</a>
            </li>
            <?php

            }   
        
	echo '</ul>';
}
mysqli_close($mysqli);
?>
