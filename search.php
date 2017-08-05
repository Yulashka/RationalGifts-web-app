<?php get_header(); ?>

<?php get_template_part( 'partials/bread' ); ?>

<div class="container container-small" id="display-container">
	<div class="row margin-bottom-10" id="display-row">
        <div class="col s12">
            <div class="row">

				<h5><?php echo sprintf( __( '%s Search Results for ' ), $wp_query->found_posts ); echo get_search_query(); ?></h5>

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<!-- article -->
					<?php get_template_part('loop'); ?>
					<!-- /article -->
				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>
						<h5>Sorry, nothing to display.</h5>
					</article>
					<!-- /article -->

				<?php endif; ?>

				<?php get_template_part('pagination'); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
