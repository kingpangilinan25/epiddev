<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
<?php /*
	<title><? wp_title(); ?></title>
*/ ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
		<meta name="msvalidate.01" content="8455E6209E687C93C1D0A3C483E5A039" />
<meta name="google-site-verification" content="lrtbRRc912hPVVf70fokmwe9LwNCKe5iw1TJ1_gqEXY" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.png">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">    
	<?php wp_head(); ?>    
	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>    
    <?php if(!wp_is_mobile()): ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PPXDW3W');</script>
    <!-- End Google Tag Manager -->
    <?php endif; ?>

	<script>
    "'article aside footer header nav section time'".replace(/\w+/g,function(n){document.createElement(n)})
  	</script>
  	<?php if(is_page(39)): //load only for the blog news page ?>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
	  <?php endif; ?>
    
    <?php // <!--Start of Zendesk Chat Script--> ?>
    <script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){
    z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
    $.src='https://v2.zopim.com/?4zMww78Q4nzrorD4hEo0GIaTdH1kzgLl';z.t=+new Date;$.
    type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
    </script>
    <?php // <!--End of Zendesk Chat Script--> ?>
    
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '881477048681375'); 
fbq('track', 'PageView');
</script>
<!-- End Facebook Pixel Code -->

</head>
<body <?php body_class(); ?>>
    
    <?php if(!wp_is_mobile()): ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PPXDW3W"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php endif; ?>
    
    
<!-- Facebook Pixel Code (noscript) -->
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=881477048681375&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code (noscript) -->
    
	<div id="page-wrap">
		<header id="header" role="banner">
        	<div class="container">
                <div class="contact-wrap pull-right">
                    <a href="tel:3035866728" class="call-us"><span class="glyphicon glyphicon-earphone"></span> Call Us<span class="hidden-xs"> At 303.586.6728</span></a>
                    <a href="mailto:info@epidemic-marketing.com" class="email-us"><span class="glyphicon glyphicon-envelope"></span> Email Us</a>
                </div>
                <div class="clearfix"></div>
                
                <nav id="nav" class="navbar navbar-default" role="navigation">
                  <div class="navbar-header">
                    <a id="logo_link" class="navbar-brand" href="<?php echo get_option('home'); ?>/">
                        <img src="<?php bloginfo('template_directory'); ?>/images/epidemic-logo.png" title="<?php bloginfo('description'); ?>" alt="<?php bloginfo('name'); ?> <?php bloginfo('description'); ?>" width="291" height="65" />
                    </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <?php /*
                    <a class="navbar-brand visible-xs" href="#">Menu</a>
                    */ ?>
                  </div>    
                    <?php /*
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse pull-right">
                        <?php # Primary navigation
                            wp_nav_menu( array(
                            'menu' => 'main_nav',
                            'depth' => 2,
                            'container' => false,
                            'menu_class' => 'nav navbar-nav',
                            //Process nav menu using our custom nav walker
                            'walker' => new wp_bootstrap_navwalker())
                            );
                        ?>
                    </div>  
                    */ ?>
                    
                    <div class="collapse navbar-collapse navbar-ex1-collapse pull-right">
                    <?php wp_nav_menu( 
                            array( 
                                'container' => false,
                                'theme_location' 	=> 'main_nav',
                                'menu_class' => 'nav navbar-nav navbar-right',
                            ) 
                    ); ?>
                    </div>
                    
                 </nav>
            </div> <!--// .container -->
		</header>