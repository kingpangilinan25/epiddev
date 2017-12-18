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


<section class="main_cc container">
            <img class="aligncenter" src="http://epidemic-marketing.com/wp-content/themes/epidemicmarketing/images/review_page/quote-bg.png" title="Comments" alt="Comments" height="36" width="1136" />
            <h1 style="margin: 0 auto 25px;" class="text-center text-uppercase"><strong>Let Our Customers Speak For Us</strong></h1>
	<div class="row">
        <section class="main_cc_text" role="main">
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
    </div> <!-- .row -->
</section> <!-- .main_cc -->
<?php get_footer(); ?>