<?php /* Template Name: women template */ get_header(); ?>

<?php get_template_part( 'partials/bread' ); ?>

<div class="container container-small">
    <div class="row">
        <h3 class="center-align header">Shop by sport persona</h3>
        <?php foreach ($personas as $persona): ?>
        	<div class="col s12 m4 l4">
                <div class="card">
                    <a href="<?php echo $persona ?>">
                        <img class="responsive-img" src="<?php bloginfo('template_directory'); ?>/pictures/women/<?php echo $persona ?>.jpg" alt="Best gifts for <?php echo $persona ?>">
                        <span class="float-bottom-right"><p class="flow-text pic-text"><?php echo $persona ?></p></span>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
