<?php /*
	Template Name: Home
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
<section class="hero-areav2" role="banner">
	<div class="container">
        <h1 class="title text-center" data-wow-delay="1s">Need more customers?</h1>
		<div class="row">
			<div class="col-sm-6 text-center hidden-xs">
				<img class="hero-website" data-wow-delay="3s" src="<?php bloginfo('template_directory'); ?>/images/hero-website.png" title="Sample Website" alt="Sample Website" width="412" height="391" />
			</div>
			<div class="col-sm-6">
				<div class="hero-form-container" data-wow-delay="2s">
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
		</div>
    </div> <?php // container ?>
</section> <?php // hero-area ?>
*/ ?>

<div class="hero-v3-cont">
    <div class="hero-areav3" role="banner">
        <div class="hero-header">How can we help?</div>
	<p class="text-center" style="margin: -22px auto 10px;">( Choose One )</p>
        <div class="row row-hero-1">
            <div class="col-xs-6">
                <div class="hero-img-wrap gl-website">
                    <div class="selected-label-wrap">Selected</div>
                    <img draggable="false" src="<?php echo get_template_directory_uri(); ?>/images/hero-v3/great-looking-website.png" title="Great Looking Website" alt="I need a great looking website"  />
                </div>
            </div> <?php // .col ?>
            <div class="col-xs-6">
                <div class="hero-img-wrap seo-audit">
                    <div class="selected-label-wrap">Selected</div>
                    <img draggable="false" src="<?php echo get_template_directory_uri(); ?>/images/hero-v3/seo-audit.png" title="Free SEO Audit" alt="I want a free SEO audit"  />
                </div>
            </div> <?php // .col ?>
        </div> <?php // .row ?>
        <hr />
        <div class="row form-row-cont">
        <?php echo do_shortcode('[contact-form-7 id="1222" title="heroForm2"]'); ?>
        </div>
    </div> <?php // .hero-areav3 ?>
</div>
<div class="featured-items-cont text-center">
	<div class="container">
        <h1 class="sec-title sec-title-lg">Epidemic Marketing is a premier Denver Colorado Search Engine Optimization Company that takes the time to understand your business </h1>
        <div class="row">
            <div class="col-xs-6 col-sm-3">
            	<img src="<?php echo get_template_directory_uri(); ?>/images/home-edits/icon-1.png" title="Quick Turnaround" alt="Quick Turnaround" />
                <h2>Quick Turnaround</h2>
                <p>It’s not just about getting people to your website, it’s about looking good when they show up.</p>
            </div>
            <div class="col-xs-6 col-sm-3">
            	<img src="<?php echo get_template_directory_uri(); ?>/images/home-edits/icon-2.png" title="SEO baked in" alt="SEO baked in" />
                <h2>SEO baked in</h2>
                <p>We can bring highly qualified visitors to your website 7 days a week, 365 days a year!</p>
            </div>
            <div class="clearfix visible-xs-block"></div>
            <div class="col-xs-6 col-sm-3">
            	<img src="<?php echo get_template_directory_uri(); ?>/images/home-edits/icon-3.png" title="Easy to Use" alt="Easy to Use" />
                <h2>Easy to Use</h2>
                <p>You are not limited to writing text, you can also use images, audio, and video for content.</p>
            </div>
            <div class="col-xs-6 col-sm-3">
            	<img src="<?php echo get_template_directory_uri(); ?>/images/home-edits/icon-4.png" title="Premium Features" alt="Premium Features" />
                <h2>Premium Features</h2>
                <p>Get a complete digital marketing team with real time industry experience at a deeply discounted rate!</p>
            </div>        
        </div> <?php // row ?>
    </div> <?php // container ?>
</div> <?php // featured-items-cont ?>

<section class="testi-wrap">
	<div class="container text-center">
        <h2 class="testi-header">What Our Clients Are Saying</h2>
        <div class="testi-slider">
          <ul class="slides">
            <li>
                <blockquote class="testi-item-wrap">
                    <span class="testi-author">Chris Hall</span>
                    <p>The time spent working with Epidemic netted BIG results. The first year we worked together they managed to place us in 6 of the top 10 spots on Google. We owned Google…they have since changed their algorithm. Their work continues to generate great results on the search engines. They are very hands on and knowledgeable about the latest that Google is up to and how to position their clients to achieve the expected results.</p>
                </blockquote>
            </li>
            <li>
                <blockquote class="testi-item-wrap">
                    <span class="testi-author">William Cook</span>
                    <p>Noah is an innovative expert in his field and can think outside the box to achieve results in the shortest amount of time. He is exceptional in his follow through and project management. I highly recommend him and his team and I will continue to utilize his services in current and future business prospects.</p>
                </blockquote>
            </li>
            <li>
                <blockquote class="testi-item-wrap">
                    <span class="testi-author">Tony Treash</span>
                    <p>Epidemic has been great to work with , they have helped my computer status with American Paintball Coliseum enormously, we now have partnered up on a couple of projects and am excited to see what we can create the next few years.</p>
                </blockquote>
            </li>
            </li>
            <li>
                <blockquote class="testi-item-wrap">
                    <span class="testi-author">Jeri Morgan</span>
                    <p>Like many business owners we found the process of trying to figure out SEO daunting and time consuming. Noah was one of the few people that we met in our search who was actually able to help us. He understands SEO, if you want your business to be found; call Noah. </p>
                </blockquote>
            </li>
            <li>
                <blockquote class="testi-item-wrap">
                    <span class="testi-author">Stacey Wilson</span>
                    <p>Noah is great to work with. He continually strives to broaden his knowledge base through research and classes. Noah is always willing to discuss trends and strategies. I would recommend his company for on site and off site SEO services.</p>
                </blockquote>
            </li>
            <li>
                <blockquote class="testi-item-wrap">
                    <span class="testi-author">Daniel Risinger</span>
                    <p>Great guy with great business assets. Don't believe me check out epidemic marketing.com yourself! He will give the image your company needs in the internet world easy to navigate expose products everywhere and know the traffic record.</p>
                </blockquote>
            </li>
            <li>
                <blockquote class="testi-item-wrap">
                    <span class="testi-author">Kyle Raley</span>
                    <p>Noah is a true visionary when it comes to digital marketing. He possesses great talents for SEO and social media coverage to help his friends and clients in the best way he can. Noah is a hard worker with a motivation that is simply unmatched.<br/>
It has been a pleasure working under Noah and I expect our professional relationship to continue well into the future. </p>
                </blockquote>
            </li>
            <li>
                <blockquote class="testi-item-wrap">
                    <span class="testi-author">Nicole Cox</span>
                    <p>Noah is a valuable asset to our business and web design. He has continued to engineer our web pages with knowledge and functionality. I highly recommend Noah for your jobs, big or small.</p>
                </blockquote>
            </li>
            <li>
                <blockquote class="testi-item-wrap">
                    <span class="testi-author">Angel Miller</span>
                    <p>Noah is creative and has detailed knowledge of graphic/web design and marketing. He is easy and fun to work with. He wants his clients to understand the processes of marketing/web design. He takes his time to explain these areas and he articulates his vision and goals for the customer/clients in understandable terms. Noah is definitely an expert and a great asset to have...</p>
                </blockquote>
            </li>
            <li>
                <blockquote class="testi-item-wrap">
                    <span class="testi-author">Melissa Kleinpeter</span>
                    <p>Noah and his services are key in today's market! He is an amazing SEO professional. Expert with details in his field. If you want results with online traffic Noah will deliver!</p>
                </blockquote>
            </li>
            <li>
                <blockquote class="testi-item-wrap">
                    <span class="testi-author">Kathleen Sew Fine/ Denver Seamstress</span>
                    <p>The website Noah design for me is the only advertising I've needed to bring me new clients. His expertise and diligence lead search engines to my site in a steady flow. His advice and counseling are invaluable!</p>
                </blockquote>
            </li>
            <li>
                <blockquote class="testi-item-wrap">
                    <span class="testi-author">Dave Muesbeck</span>
                    <p>Noah is at the top of his league. I came to him for help with my photography website. His work and the service I received from Epidemic Marketing was top notch. I was able to get a word press theme custom designed exactly the way I wanted it. He helped me with my SEO, which I knew nothing about. He also set up a shopping cart/e-commerce site for me which increased my sales...</p>
                </blockquote>
            </li>
            <li>
                <blockquote class="testi-item-wrap">
                    <span class="testi-author">Chuck Hahn</span>
                    <p>Noah is an experienced SEO professional. His clients are very satisfied with his services and refer him to others. If you're looking for SEO service look no further.</p>
                </blockquote>
            </li>
            <li>
                <blockquote class="testi-item-wrap">
                    <span class="testi-author">Chad E. Warriner</span>
                    <p>Noah stands alone in his knowledge, expertise and customer service. He has innovative ways to solve any problem in a timely fashion at an affordable price. I highly recommend him and Epidemic Marketing.</p>
                </blockquote>
            </li>
            <li>
                <blockquote class="testi-item-wrap">
                    <span class="testi-author">Mike Saunders, MBA</span>
                    <p>Noah consults with our clients and I constantly get great feedback from his advice!</p>
                </blockquote>
            </li>
            <li>
                <blockquote class="testi-item-wrap">
                    <span class="testi-author">Matt Wheeler</span>
                    <p>Both on a personal level and business level I highly recommend Noah and the Epidemic Marketing Team. In 2010 I brought Epidemic in to be a consultant to our Marketing team. We were getting a bit of web traffic, however, the visitors were not taking any action. Noah was able to help us bring together our social media messaging (FB, LinkedIn, Press Releases, etc.), SEO strategy, and a way to get more actionable web results (demo request, whitepaper downloads, pricing request, etc.). I would highly recommend their service.Your organization will feel like they take the results personally. </p>
                </blockquote>
            </li>
          </ul>
        </div>
    </div> <?php /* container */ ?>
</section> <?php /* testi-wrap */ ?>

<div class="need-great-web-cont-out">
<div class="sec-wrap need-great-web container">
	<div class="row">
    	<div class="col-sm-6">
        	<h2 class="section-header">You Need a Great Website</h2>
            <p>It's not just about getting customers to your website, it’s about looking great when they show up. Epidemic Marketing can help you make that happen. We use cutting edge technology combined with industry leading design to make sure your website looks fantastic and operates smoothly for your visitors.</p>
            <a href="http://www.epidemic-marketing.com/examples/" class="cbtn cbtn-green cbtn-learn-seo">See Examples</a>
        </div>
    	<div class="col-sm-6 text-center hidden-xs">
        	<img class="ngweb-img" src="<?php bloginfo('template_directory'); ?>/images/home-edits/need-great-web.jpg" title="WE OFFER YOU CUTTING EDGE SEO TECHNIQUES" alt="WE OFFER YOU CUTTING EDGE SEO TECHNIQUES" width="527" height="305" />
        </div>
    </div>
</div> <?php /* need-great-web-cont-out */ ?>
</div> <?php /* sec-wrap container */ ?>

<?php /*
<section class="sec-wrap blue-sec wl-seo">
	<div class="container">
	<div class="row row-eq-height">
    	<div class="col-sm-3 col-sm-offset-1 text-center hidden-xs">
        	<img class="wlseo-img" src="<?php bloginfo('template_directory'); ?>/images/home-edits/white-label-seo-img.png" title="WHITE LABEL SEO" alt="WHITE LABEL SEO" width="254" height="528" />
        </div>
    	<div class="col-sm-8 wl-seo-right">
        	<div class="ver-mid">
                <h2 class="section-header">Agencies: White Label SEO</h2>
                <p>Would you like to offer premium quality SEO Services to your clients without all of the hard work? Get a complete digital marketing team with real time industry experience at a deeply discounted rate!</p>
                <p>We are great at what we do and use the industries top tools. We are able to obtain solid rankings and drive traffic to our clients using 100% White Hat sustainable techniques. Staying on top of the constantly changing best practices in our industry is our top priority so our team members are constantly attending seminars and classes to stay educated with the latest and greatest SEO and digital marketing techniques.</p>
                <a href="http://epidemic-marketing.com/white-label-seo/" class="cbtn cbtn-green cbtn-white-label">Get a Free SEO Audit</a>
            </div>
        </div>
    </div> <?php // row ?>
    </div> <?php // container ?>
</section> <?php // sec-wrap container ?>
*/ ?>

<section class="sec-wrap sec-wrap-green form-footer-sec">
	<div class="container">
    	<h2 class="text-center section-header">Lets Talk about Your Business <i class="fa fa-address-card-o" aria-hidden="true"></i></h2>
      <div style="margin-left: auto;margin-right: auto;max-width:820px;">
      <div class="row"><?php echo do_shortcode('[contact-form-7 id="878" title="BusinessForm"]');?></div>
      </div>
    </div>
</section>
<?php /*
<section class="main_cc container">
	<div class="row">
        <section class="main_cc_text col-md-8" role="main">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>			
                <article class="post" id="post-<?php the_ID(); ?>">
                    <h1><?php the_title(); ?></h1>
                    <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
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
*/ ?>
<?php get_footer(); ?>