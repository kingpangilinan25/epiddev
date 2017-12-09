<?php /*
		<section class="widget-f-wrap">
        	<div class="container">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets')) : else : ?>
                <?php endif; ?>
            </div>
        </section>
*/ ?>

<?php /* Call Me Back Form Widget
<div class="widget-hidden-cont">
    <a href="#" class="btn-trigger widget-trigger">
        <img src="<?php echo get_template_directory_uri(); ?>/images/btn_contact.png" />
    </a>
    
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Hidden Widgets')) : else : ?>
    
        WIdget Hidden
	
	<?php endif; ?>
    
</div>

*/ ?>
        
		<footer id="footer" role="contentinfo">
        	<div class="container">
                <div class="row">
                    <div class="credit col-sm-4 col-sm-push-4">
                    	<h1>Navigation Here</h1>
                    </div>
                    <div class="credit col-sm-4 col-sm-pull-4"> 
                            <img src="<?php echo get_template_directory_uri(); ?>/images/epidemic-logo.png" title="epidemic marketing website design and seo" alt="Epidemic Marketing - Search Engine Optimization"/>
                            <span>Copyright &copy; <?php echo date('Y'); ?> - Epidemic Marketing</span>                   
                        <?php /* Copyright &copy; <?php echo date("Y"); ?> Epidemic Marketing | All Rights Reserved | 191 University Blvd #602 Denver CO 80206 United States | 303-586-6728 | www.epidemic-marketing.com */ ?>
                    </div> <?php // col4 ?>
                    <div class="col-sm-4">      
                    	<p class="phone-f-cont">
                            Call Us Now
                            <a href="tel:3035866728"><span>303-586-6728</span></a>              
                        </p>
                        <p class="addr-cont-f">
                            <a target="_blank" href="https://www.google.com/maps/place/Epidemic+Marketing/@39.7137818,-106.0812237,8z/data=!3m1!4b1!4m2!3m1!1s0x876c7e9500f3f479:0x36879da2f9893699" style="color:#8C8989;">
                            <span >191 University Blvd #602</span>
                            <span >Denver</span>,
                            <span >CO</span>
                            <span >80206</span> United States
                            </a> 
                        </p>
                        <p class="sm-f-wrap">
                            <a href="https://www.facebook.com/EpidemicMarketing" class="sm-item" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/images/sm-fb.png" title="Facebook" alt="Facebook" width="21" height="19" /></a>
                            <a href="https://twitter.com/epidemicseo" class="sm-item" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/images/sm-tweet.png" title="Facebook" alt="Facebook" width="21" height="19" /></a>
                            <a href="https://plus.google.com/+Epidemic-marketing" class="sm-item" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/images/sm-gplus.png" title="Facebook" alt="Facebook" width="21" height="19" /></a>
                            <a href="https://www.linkedin.com/company/epidemic-marketing-llc" class="sm-item" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/images/sm-ln.png" title="Facebook" alt="Facebook" width="21" height="19" /></a>
                            <a href="mailto:info@epidemic-marketing.com" class="sm-item" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/images/sm-email.png" title="Facebook" alt="Facebook" width="21" height="19" /></a>
                        </p> <?php // sm-f-wrap ?>
                    </div> <?php // col4 ?>
                </div> <?php // row ?>
            </div>
            <?php require_once(TEMPLATEPATH .'/inc/site-schema.php'); ?>
		</footer>
	</div> <!-- .page-wrap -->
	<?php wp_footer(); ?>
	<!-- Don't forget analytics -->
<?php
$user = wp_get_current_user();
$allowed_roles = array('editor', 'administrator', 'author');
?>
<?php if( !array_intersect($allowed_roles, $user->roles ) ) {  ?> 
    <?php //get_template_part("inc/footer", "script"); ?>
<?php } ?>

</body>
</html>