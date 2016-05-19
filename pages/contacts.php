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
        
        <h2>Contact Information</h2>
		<p>Aenean interdum aliquet tincidunt. Nam eget turpis tellus. Donec blandit augue non justo iaculis varius. Morbi gravida eros nec ipsum pretium eget tempor dolor varius. Duis sodales dui vel eros laoreet eget blandit eros dictum. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
		<div class="cleaner h30"></div>
		
	    <div class="col_hw float_r">
        		
                <h4>Mailing Address</h4>
                <h6><strong>Company Name</strong></h6>
                640-780 Vestibulum quis nunc id, <br />
                Maecenas massa augue, 11240 <br />
                Donec congue ipsum<br /><br />
				
                Tel: 010-020-0420<br />
				Fax: 010-030-0240<br />
                
                <div class="cleaner h30"></div>
                <h4>Our Location</h4>
                <div id="map">
                    <a href="images/map_big.jpg" title="Map">
                        <img width="300" height="200" src="images/map_thumb.jpg" alt="Our Location" class="image_wrapper" />
                    </a>
            </div>                
                
            </div>
        
          	<div class="col_hw float_l">
                <div id="contact_form">
            
                    <h4>Send us a message</h4>
                    
                    <form method="post" name="contact" action="#"> 
						<label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" /> 
						<div class="cleaner h10"></div> 
	
						<label for="email">Email:</label> <input type="text" class="validate-email required input_field" name="email" id="email" /> 
						<div class="cleaner h10"></div> 
	
						<label for="subject">Subject:</label> <input type="text" class="validate-subject required input_field" name="subject" id="subject"/> 
						<div class="cleaner h10"></div> 
	
						<label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea> 
						<div class="cleaner h10"></div>                
	
						<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" /> 
						<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" /> 
					</form> 
            
                </div> 
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