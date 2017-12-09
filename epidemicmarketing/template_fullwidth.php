<?php /*
  Template Name: Full Width
*/ ?>
<?php get_header(); ?>
<section class="main_cc container">
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
        <?php /*
        <aside class="main_sb col-md-4" role="complementary">
            <?php get_sidebar(); ?>
        </aside>
        */ ?>
</section> <!-- .main_cc -->
<?php get_footer(); ?>