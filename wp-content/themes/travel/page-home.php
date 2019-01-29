<?php get_header(); ?>
<div class=" content-area">
	<main>
		<section class="slider">
			<?php motoPressSlider( "home-slider" ) ?>
		</section>
		<?php if (get_theme_mod('set_callout_about') == "Yes") { ?>
	<section class="about-me">
		<div class="container-fluid mt-5 pr-0">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="container">
						<div class="row">
							<div class="offset-md-2 col-md-10 col-sm-12 text-center">
								<div><img src="<?php echo  wp_get_attachment_url(get_theme_mod('set_image_about')) ?>" alt="traveler image" class="img-fluid rounded-circle"></div>
								<div class="mt-3">
									<?php echo wpautop(get_theme_mod('set_text_about')); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 about-me__img">
					<img src="<?php echo  wp_get_attachment_url(get_theme_mod('set_image_about_bg')) ?>" alt="" class="img-about-me-bg">
				</div>
			</div>
		</div>
	</section>
	<?php } ?>
		<?php if (get_theme_mod('set_callout') == "Yes") { ?>
		<section class="container-fluid mt-5 quote-section" id="quote-section">
			<div class="container">
				<div class="callout-text text-center">
					<?php if(empty(get_theme_mod('set_link'))){ ?>
					<h2 class="pt-5 quote-section__title">
					<?php echo get_theme_mod('set_headline') ?>
					</h2>
					<div class="callout-subtext mt-5">
						<?php echo wpautop(get_theme_mod('set_text')); ?>
					</div>
					<?php }
					else{ ?>
					<h2 class="pt-5 quote-section__title">
					<a href="http://<?php echo wp_kses_post(get_theme_mod('set_link')); ?> ">
						<?php echo get_theme_mod('set_headline') ?>
					</a>
					</h2>
					<div class="callout-subtext mt-5">
						<?php echo wpautop(get_theme_mod('set_text')); ?>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<?php } ?>
	<?php if (get_theme_mod('set_callout_blog') == "Yes") { ?>
		<section class="container latest-news mt-5">
			<h2 class="text-center latest-news__title mb-5"><?php echo get_theme_mod('set_headline_blog') ?></h2>
			<div class="row">
				<?php
					$featured = new WP_Query('post_type=post&posts_per_page=3&cat=1');
					if($featured->have_posts()):
						while( $featured->have_posts() ): $featured->the_post();
				?>
				<div class="col-sm-4 col-12">
					<?php get_template_part('template-parts/content', 'featured'); ?>
				</div>
				<?php
				endwhile;
				wp_reset_postdata();
				endif;
				?>
			</div>
		</section>
		<?php } ?>
</main>
</div>
<?php get_footer(); ?>