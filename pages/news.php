<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include ('../blocks/head.php');?>
<body>
    <?php include ("../includes/config.api") ?>

<div id="tooplate_wrapper">
	<?php include ('../blocks/header.php');?>
        <?php include ('../blocks/social.php');?>
    
    <div id="tooplate_main_top"></div>
    <div id="tooplate_main">
        
        <div id="content">
            <h2>Новости</h2>
            <?php include ('../includes/db_news.php')?>
        </div>
        
        <div id="sidebar">
            <h3>Testimonial</h3>
            <blockquote>
            <p>Fusce nec felis id lacus sollicitudin vulputate. Proin tincidunt, arcu id pellentesque accumsan, neque dolor imperdiet ligula, quis viverra tellus nulla a odio. Curabitur vitae enim risus, at placerat turpis. Mauris feugiat suscipit tempus fringilla, felis in velit.</p>
            <cite><a href="#">James</a> - <span>Web Design</span></cite>
            </blockquote>
            
            <div class="cleaner h40"></div>
            
            <h3>Featured Project</h3>
            <img src="images/tooplate_image_06.jpg" title="Featured Project" alt="Image 06" class="image_wrapper" />
            <p>Aenean sit amet purus malesuada leo feugiat semper. Duis purus orci, vestibulum rutrum tincidunt et, placerat a arcu. Nullam sed orci orci, sed feugiat lacus. <a href="#">More...</a></p>
        </div>	
        
		<div class="cleaner"></div>       
	</div> 
    <div id="tooplate_main_bottom"></div>
    
    <div id="tooplate_bottom">
     	<?php include ('../blocks/bottom_list.php');?>
  		<div class="col_allw270">
			<h4>Blog Posts</h4>
			<ul class="bottom_list">
				<li><a href="#">Donec placerat odio at leo suscipit hendrerit</a></li>
				<li><a href="#">Proin vitae magna eget sem mattis imperdie</a></li>
				<li><a href="#">Nunc ac nunc ut erat consectetur rutrum</a></li>
				<li><a href="#">Phasellus cursus nulla in risus condimentum </a></li>
				<li><a href="#">Fusce euismod odio sed mauris hendrerit</a></li>
			</ul>
   		</div>
    	<div class="col_allw270 col_last">
			<h4>About Us</h4>
            <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque imperdiet mi eu eros tincidunt, a suscipit est mollis. Fusce molestie varius eros eu imperdiet. In hac habitasse platea dictumst. Quisque id justo in magna pharetra rhoncus et eu tellus.</p>
        </div>  
		              
    	<div class="cleaner"></div>
    </div>    
    
    <?php include ('../blocks/footer.php');?>
</div>

</body>
</html>