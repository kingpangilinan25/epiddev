<?php get_header(); ?>
<section class="main_cc container">
	<div class="row">
        <section class="main_cc_text col-md-8" role="main">
			<?php woocommerce_content(); ?>
        </section> <!-- .main_cc_text -->
        <aside class="main_sb col-md-4" role="complementary">
            <?php get_sidebar(); ?>
        </aside>
    </div> <!-- .row -->
</section> <!-- .main_cc -->
<?php get_footer(); ?>