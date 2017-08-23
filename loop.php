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
	        			<div class = "post-description left-align">
			                
		                    <div class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
		                    <div><span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span></div>
		                    
		                    <p class="product-descrip font-size16px"><?php rational_wp_excerpt('rational_wp_index'); // Build your custom callback length in functions.php ?></p>
		                    <div class="center-align">
		                        <a target="_blank" class="btn waves-effect waves-light margin-top" id="display-btn" href="<?php the_permalink(); ?>">More details</a>
		                    </div>
			            </div>
			          
		        	</div>
		        </div>
	        </div>
		</div>

	</div>
</article>