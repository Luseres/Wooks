<?php get_header(); ?>
<main class="homepage">
	<section class="section__main">
		<div class="main__illustration">
			<img class="main__image" src="<?php echo THEME_URL; ?>/resources/images/home.png" alt="Main illustration">
		</div>
		<div class="main__content">
			<h1 class="main__title">Books for everyone</h1>
			<p class="main__description">Wooks is a subscription company that brings you quality, new books to your doorstep every month.</p>
			<a class="wooks__button-link" href="<?= get_site_url() ?>/subscriptions"><button class="wooks__button wooks__button--cta">Start an trail subscriptions</button></a>
			<a href="<?= get_site_url() ?>/my-account?signin" class="main__signin">Sign in to Wooks</a>
		</div>
	</section>
	<section class="section__reasons">

		<?php
		$query = new WP_Query(array(
			'post_type' => 'reasons',
			'posts_per_page' => -1
		)); ?>
		<?php if ($query->have_posts()) : ?>
			<?php while ($query->have_posts()) : $query->the_post(); ?>
				<div class="reasons__reason fadein-slideup">
					<img class="reason__image" src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()), "size")[0]; ?>" alt="<?php the_title(); ?>">
					<p class="reason__reason"><?php the_title(); ?></p>
					<p class="reason__explained"><?php echo wp_filter_nohtml_kses(get_the_content()); ?></p>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		<?php endif; ?>

	</section>
</main>
<?php get_footer(); ?>