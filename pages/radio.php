<?php session_start();
//ini_set('display_errors',1);
//error_reporting(E_ALL);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include ('../blocks/head.php');?>
<body>
    <?php include ("../includes/config.api") ?>
    

<div id="tooplate_wrapper">
	<?php include ('../blocks/header.php');?>
        <?php include ('../blocks/social.php');?>
    
    
    
    <div id="tooplate_middle">
        <div align="center" style="width:180px;">
	<div id="RP_v3_style"></div>
	<div id="RP_v3_player-wrapper"><a href="http://radiopotok.ru/">Онлайн радио</a></div>
	<div id="RP_v3_content" style="max-height:237px; overflow:auto;"></div>
	<link rel="stylesheet" href="http://yandex.st/jquery-ui/1.8.21/themes/base/jquery.ui.all.min.css" />
	<script type="text/javascript"><!--
		var RP_v3_font_size           = '14px';    // Размер шрифта
		var RP_v3_bg_color            = 'black';   // Цвет фона
		var RP_v3_border_color        = '#F1CA13';    // Цвет рамки
		var RP_v3_border_hover_color  = '#f00';    // Цвет рамки при наведении
		var RP_v3_a_color             = 'white';    // Цвет ссылки
		var RP_v3_a_color_act         = '#16F113';    // Цвет активной ссылки
		var RP_v3_a_color_hover       = 'red';     // Цвет ссылки при наведении
		var RP_v3_new_window          = false;     // Слушать радио в новом окне [true/false]
	//--></script>
	<script type="text/javascript" src="http://yandex.st/jquery/1.4.4/jquery.min.js"></script>
	<script type="text/javascript" src="http://yandex.st/swfobject/2.2/swfobject.min.js"></script>
	<script type="text/javascript" src="http://yandex.st/jquery-ui/1.8.22/jquery-ui.min.js"></script>
	<script type="text/javascript" src="http://radiopotok.ru/f/script3/1a1bf11671b17684a547f28fa10fe59b.js" charset="UTF-8"></script>
</div>
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
</html><?php
