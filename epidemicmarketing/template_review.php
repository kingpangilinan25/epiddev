<?php /*
	Template Name: Review
*/ ?>
<?php get_header(); ?>
<?php /*
<section class="hero-area text-center onscreen fadeIn" role="banner">
	<div class="container">
        <h1 class="title onscreen rollIn" data-wow-delay="1s">Need more customers?</h1>
        <p class="desc onscreen fadeInLeftBig" data-wow-duration="1s" data-wow-delay="2s">Let us <strong>BRING THEM IN!</strong> We build great websites and draw in your customers with cutting edge SEO techniques</p>
        <a href="http://epidemic-marketing.com/contact-us/" class="cbtn cbtn-blue onscreen lightSpeedIn" data-wow-delay="3s">START YOUR PROJECT <span class="glyphicon glyphicon-play-circle"> </span></a>
    </div> <?php // container ?>
</section> <?php // hero-area ?>
*/ ?>
<section class="hero-areav2" role="banner">
	<div class="container-fluid-old">
        <span class="title text-center onscreen fadeInUp" data-wow-delay="0.5s">Leave us a Review</span>
		<div class="row">
            
            <div class="col-sm-3 col-xs-6 text-center">            
                <div class="rev-sm-item">
                    <img src="http://epidemic-marketing.com/wp-content/themes/epidemicmarketing/images/review_page/rev-logo-gplus.jpg" title="Google Review" alt="Google Review" height="137" width="260">
                    <div class="rev-btn-caption">
                        <a target="_blank" href="//www.google.com.ph/#q=Epidemic%20Marketing%20191%20University%20Boulevard%20%23602%20Denver&ludocid=3929282523200829081&hl=en&lrd=0x876c7e9500f3f479:0x36879da2f9893699,1,," class="btn-info btn btn-lg text-uppercase">Click Here</a>
                    </div>
                </div>                
            </div>
            
            <div class="col-sm-3 col-xs-6 text-center">
                <div class="rev-sm-item">
                    <img src="http://epidemic-marketing.com/wp-content/themes/epidemicmarketing/images/review_page/rev-logo-yelp.jpg" title="Yelp" alt="Yelp" height="137" width="260">
                    <div class="rev-btn-caption">
                        <a href="//www.yelp.com/biz/epidemic-marketing-denver" class="btn-info btn btn-lg text-uppercase" target="_blank">Click Here</a>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-3 col-xs-6 text-center">
                <div class="rev-sm-item">
                    <img src="http://epidemic-marketing.com/wp-content/themes/epidemicmarketing/images/review_page/rev-logo-jb.png" title="Facebook" alt="Facebook" height="137" width="260">
                    <div class="rev-btn-caption">
                        <a href="http://www.judysbook.com/Epidemic-Marketing-BtoB~Professional-denver-co-r30500657.htm" class="btn-info btn btn-lg text-uppercase" target="_blank">Click Here</a>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-3 col-xs-6 text-center">
                <div class="rev-sm-item">
                    <img src="http://epidemic-marketing.com/wp-content/themes/epidemicmarketing/images/review_page/rev-logo-fb.jpg" title="Facebook" alt="Facebook" height="137" width="260">
                    <div class="rev-btn-caption">
                        <a href="https://www.facebook.com/pages/Epidemic-Marketing-LLC/143314735735601?fref=ts" class="btn-info btn btn-lg text-uppercase" target="_blank">Click Here</a>
                    </div>
                </div>
            </div>
            
            <?php /*
			<div class="col-sm-6 text-center hidden-xs">
				<img class="hero-website onscreen fadeInUp" data-wow-delay="3s" src="<?php bloginfo('template_directory'); ?>/images/hero-website.png" title="Sample Website" alt="Sample Website" width="412" height="391" />
			</div>
			<div class="col-sm-6">
				<div class="hero-form-container onscreen fadeInRight" data-wow-delay="2s">
					<h2>GET A FREE SEO AUDIT</h2>
					<p class="fh-v2">A $500 VALUE 
						<img src="<?php bloginfo('template_directory'); ?>/images/free-sbust.png" title="free" alt="free" style="vertical-align: middle;" />
						<span class="fh-v2-left"></span>
						<span class="fh-v2-right"></span>
					</p>
					<p class="form-help">Just enter your website for a FREE actionable SEO audit from our SEO experts!</p>
					<?php echo do_shortcode('[contact-form-7 id="987" title="HeroForm"]'); ?>
				</div>
			</div>
            */ ?>
		</div>
    </div> <?php // container ?>
    <span class="darken-bg-hero"> </span>
</section> <?php // hero-area ?>


<section class="main_cc container">
            <img class="aligncenter" src="http://epidemic-marketing.com/wp-content/themes/epidemicmarketing/images/review_page/quote-bg.png" title="Comments" alt="Comments" height="36" width="1136" />
            <h1 style="margin: 0 auto 25px;" class="text-center text-uppercase"><strong>Let Our Customers Speak For Us</strong></h1>
	<div class="row">
        <section class="main_cc_text col-md-8" role="main">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>			
                <article class="post" id="post-<?php the_ID(); ?>">
                    <?php //include (TEMPLATEPATH . '/inc/meta.php' ); ?>
                    <div class="entry">
                        <?php the_content(); ?>
                        <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
                    </div>
                    <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
                </article>		
                <?php // comments_template(); ?>
            <?php endwhile; endif; ?>
        </section> <!-- .main_cc_text -->
        <aside class="main_sb col-md-4" role="complementary">
            <?php get_sidebar(); ?>
        </aside>
    </div> <!-- .row -->
</section> <!-- .main_cc -->
<?php get_footer(); ?>