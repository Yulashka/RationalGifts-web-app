<?php
$pagename = get_query_var('pagename');  
if ( !$pagename && $id > 0 ) {  
    // If a static page is set as the front page, $pagename will not be set. Retrieve it from the queried object  
    $post = $wp_query->get_queried_object();  
    $pagename = $post->post_name;  
}


// If a static page is set as the front page, $pagename will not be set. Retrieve it from the queried object  
$post = $wp_query->get_queried_object();  
$post_data = get_post($post->post_parent);
$pageParent = $post_data->post_name;

$price = get_query_var('price', PRICE_ALL);
$price_array = array(PRICE_25 => "Under 25$", PRICE_100 => "Under 100$", PRICE_200 => "Under 200$", PRICE_ALL => "Everything");

$baseMeta = array(
        	'relation' => 'AND',
        	array(
				'taxonomy' => 'category',
				'field'    => 'slug',
				'terms'    => array( $pageParent ),
			),
			array(
				'taxonomy' => 'category',
				'field'    => 'slug',
				'terms'    => array( $pagename ),
			),
		);

switch ($price) {
    case PRICE_ALL:
        // no price filter
        $meta = $baseMeta;
        break;
    case PRICE_25:
    	$meta = array(
		'relation' => 'AND',
			$baseMeta,
			array(
	        	'taxonomy'     => 'category',
				'field'   => 'slug',
				'terms' => array(PRICE_25),
			),
		);
        break;
    case PRICE_100:
        $meta = array(
		'relation' => 'AND',
			$baseMeta,
			array(
	        	'taxonomy'     => 'category',
				'field'   => 'slug',
				'terms' => array(PRICE_25, PRICE_100),
			),
		);
        break;
    case PRICE_200:
        $meta = array(
		'relation' => 'AND',
			$baseMeta,
			array(
	        	'taxonomy'     => 'category',
				'field'   => 'slug',
				'terms' => array(PRICE_25, PRICE_100, PRICE_200),
			),
		);
        break;
    default:
    	log_me(sprintf("Requesting unknow price filtre: %s", $price));
    	// no price filter
        $meta = $baseMeta;
        break;
}

$args = array(
	'post_type'  => 'post',
	'tax_query' => $meta,
);

//print_r ($args);

$query = new WP_Query( $args );

?>

<?php get_template_part( 'partials/bread' ); ?>

<div class="container container-small">
	<div class="row margin-bottom-10">
        <div class="col s12">
            <div class="row">
                <div class="col s12">
                    
					<ul class="collection bg-white">
        			
				        	<div class="row margin-top-20px">
                        	<?php foreach ($price_array as $key => $value): ?>
                        	
                                <div class="col l3 s6">
									<?php if($key == $price) :?> 
									<input name="price" type="checkbox" onclick="return false" id="price" checked="checked" />
									<?php endif; ?>

									<label for="price"><a href="<?php echo add_query_arg( array('price' => $key) );?>" ><?php echo $value ?></a></label>

                                </div>
                           
                            <?php endforeach; ?>
                         	</div>

                        </li>

					</ul>
               
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 center-align">
            <?php if ($query->have_posts()): while ($query->have_posts()) : $query->the_post(); ?>
				<!-- article -->
				<?php get_template_part('loop'); ?>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>
					<h2>Sorry, nothing to display.</h2>
				</article>
				<!-- /article -->

			<?php endif; ?>

        </div>
    </div>
</div>

