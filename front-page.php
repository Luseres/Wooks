<?php get_header(); ?>
<main class="homepage">
	<section class="section__main">
		<div class="main__illustration">
			<img class="main__image" src="<?php echo THEME_URL; ?>/resources/images/home.png" alt="Main illustration">
		</div>
		<div class="main__content">
			<h1 class="main__title">Books for everyone</h1>
			<p class="main__description">Wooks is a subscription company that brings you quality, new books to your doorstep every month.</p>
			<a class="no-decoration" href="<?= get_site_url() ?>/subscriptions">
				<button class="button button--primary">
					<span>Free trail subscriptions</span>
				</button>
			</a>
			<a href="<?= get_site_url() ?>/my-account?signin" class="main__signin">Sign in to Wooks</a>
		</div>
	</section>

	<div class="reasons">
		<?php
		$query = new WP_Query(array(
			'post_type' => 'reasons',
			'posts_per_page' => -1
		));
		$i = 0;
		if ($query->have_posts()) :
			while ($query->have_posts()) : $query->the_post(); 				 
				?>
				<div class="reasons__reason fadein-slideup">
					<div class="background"></div>
					<div class="contents">
						<?php if ($i == 1) : ?>
							<div class="img-box">
								<img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()), "size")[0]; ?>" alt="<?php the_title(); ?>">
							</div>
							<div class="heading">
								<h2><?php the_title(); ?></h2>
								<p><?php echo wp_filter_nohtml_kses(get_the_content()); ?></p>
							</div>
						<?php else : ?>
							<div class="heading">
								<h2><?php the_title(); ?></h2>
								<p><?php echo wp_filter_nohtml_kses(get_the_content()); ?></p>
							</div>
							<div class="img-box">
								<img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()), "size")[0]; ?>" alt="<?php the_title(); ?>">
							</div>
						<?php endif; ?>
					</div>
				</div>
				<?php
				$i++;
			endwhile;
			wp_reset_query();
		endif; ?>
	</div>
</main>
<?php get_footer(); ?>