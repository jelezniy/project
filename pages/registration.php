<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include ('../blocks/head.php');?>
<body>
    <?php include ("../includes/config.api") ?>
    

<div id="tooplate_wrapper">
	<?php include ('../blocks/header.php');?>
        <?php include ('../blocks/social.php');?>
    
    
    
    <div id="tooplate_middle">
        
        <form action="../includes/save_user.php" method="post">
            <p>
                <label>Ваш логин:<br></label>
                <input name="login" type="text" size="15" maxlength="15">
            </p>

            <p>
                <label>Ваш пароль:<br></label>
                <input name="password" type="password" size="15" maxlength="15">
            </p>

            <p>
                <input type="submit" name="submit" value="Зарегистрироваться">
            </p>
        </form>

        <div class="cleaner"></div>
    </div> <!-- end of tooplate_middle -->
    
    
	
   
    
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
            <p><em>Donec vehicula mauris sed arcu fermentum ornare. Aliquam erat volutpat.</em></p>
            <p>Orange is one of the <a href="http://www.tooplate.com/free-templates">free templates</a> by tooplate. Credits go to <a href="http://www.photovaco.com">Free Photos</a> for photos and <a href="http://www.thewebdesignblog.co.uk">The Web Design Blog</a> for icons.</p>
        </div>   
		             
    	<div class="cleaner"></div>
    </div>    
    
    <?php include ('../blocks/footer.php');?>
</div>

</body>
</html>
