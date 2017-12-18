<?php /*
  Template Name: Blog
*/ ?>

<?php get_header(); ?>

<section class="main_cc container">
    <h1>What's new in Marketing?</h1>
    <hr />
	<div class="row">

        <section class="main_cc_text col-md-12" role="main">
          
            <div class="masonry-wrap"> 
              <?php // class="grid js-masonry" data-masonry-options='{ "itemSelector": ".grid-item", "columWidth": 296 }'> ?>

            <?php query_posts( 'posts_per_page=-1' ); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>			

                <article class="post post-blog grid-item masonry-item-wrap" id="post-<?php the_ID(); ?>">
                    <div class="well">
                        <?php //include (TEMPLATEPATH . '/inc/meta.php' ); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php if ( has_post_thumbnail() ): ?>
                          <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 653,420 ), false, '' ); ?>
                          <a href="<?php the_permalink(); ?>" title="Read Full Article: <?php echo substr(get_the_title(), 0,30); ?>...">
                            <img src="<?php echo $src[0]; ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" class="img-thumbnail" />
                          </a>
                        <?php endif; ?>

                        <div class="entry">

                            <p><?php echo substr(get_the_excerpt(), 0,150); ?><a href="<?php the_permalink(); ?>" title="Learn more about <?php the_title(); ?>">[...]</a></p>

                            <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

                        </div> <?php // entry ?>
                    </div>  <?php // well ?>

                    <?php //edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

                </article>		

                <?php // comments_template(); ?>

            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?> 
            
            </div>

        </section> <!-- .main_cc_text -->
        
        <?php /*

        <aside class="main_sb col-md-4" role="complementary">

            <?php get_sidebar(); ?>

        </aside>
        
        */ ?>

    </div> <!-- .row -->

</section> <!-- .main_cc -->

<?php get_footer(); ?>