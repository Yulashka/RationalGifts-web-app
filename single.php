<?php get_header(); ?>
	
<?php get_template_part( 'partials/bread' ); ?>

<div class="container container-small" >
	<div class="row">
        <div class="col s12 center-align">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			    <div class="row single-post">
			        <div class="col s12 ">
			        	<div class = "bg-white">
							<div class="row">
				        		<div class="col s12">
				        			<!-- post thumbnail -->
									<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_post_thumbnail( 'full', array( 'class' => 'responsive-img padded-image' ) ); // Declare pixel size you need inside the array ?>
										</a>
									<?php endif; ?>
									<!-- /post thumbnail -->
				        		</div>
			        		</div>
			        		<div class="row">
				        		<div class="col s12">
				        			<div class = "post-details left-align">
						                
					                    <div class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
					                    <div><span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span></div>
					                    
					                    <?php the_content(); // Dynamic Content ?>
						            </div>
						          
					        	</div>
					        </div>
					        <div class="row">
				        		<div class="col s12">
				        			<div class = "left-align post-tags-outer">
				        				<div class = "post-tags-inner">
											<?php the_tags('', '  '); // Separated by space with a line break at the end ?>
											<?php the_category('  '); // Separated by space ?>
										</div>
									</div>
								</div>
					        </div>
					        <div class="row">
				        		<div class="col s12">
				        			<div class = "post-details left-align">
										<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
									</div>
								</div>
					        </div>
					        <div class="row">
				        		<div class="col s12">
				        			<div class = "post-details left-align">
										<?php comments_template(); ?>
									</div>
								</div>
					        </div>
				        </div>
		        	</div>
		        
		        </div>

			</article>

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h1>Sorry, nothing to display.</h1>

			</article>
			<!-- /article -->

		<?php endif; ?>

	</div>
	</div>

</div>


<?php get_footer(); ?>
