<?php
$pagename = get_query_var('pagename');  

if (is_category()) {
	$bread = array('home' => site_url(), single_cat_title( '', false ) => "");
} else if (is_tag()) {
	$bread = array('home' => site_url(), single_cat_title( '', false ) => "");
} else if (is_search()) {
	$bread = array('home' => site_url(), "Search" => "");
} else if (is_page() || is_single()) {
	if ( !$pagename && $id > 0 ) {  
	    // If a static page is set as the front page, $pagename will not be set. Retrieve it from the queried object  
	    $post = $wp_query->get_queried_object();  
	    $pagename = $post->post_name;  
	}

	// If a static page is set as the front page, $pagename will not be set. Retrieve it from the queried object  
	$post = $wp_query->get_queried_object();  
	$post_data = get_post($post->post_parent);
	$pageParent = $post_data->post_name;

	if ($pageParent == $pagename && is_page()) {
		$bread = array('home' => site_url(), $pageParent => site_url() . '/' . $pagename);
	} else if ($pageParent != $pagename && is_page()) {
		$bread = array('home' => site_url(), $pageParent => site_url() . '/' . $pageParent, $pagename => site_url() .'/' . $pageParent . '/' . $pagename);
	} else if (is_single()) {

	    if (has_category('men')) {
	    	$category = 'men';
	    } else if (has_category('women')) {
			$category = 'women';
	    } else {
	    	$category = NULL;
	    }

		$tags = wp_get_post_terms($post->ID,'post_tag', array("fields" => "names")) ;
	    if (has_category('skier')) {
	    	$persona = 'skier';
	    } else if (has_category('hiker')) {
			$persona = 'hiker';
		} else if (has_category('yogi')) {
			$persona = 'yogi';
		} else if (has_category('crossfitter')) {
			$persona = 'crossfitter';
		} else if (has_category('climber')) {
			$persona = 'climber';
		} else if (has_category('runner')) {
			$persona = 'runner';
	    } else {
	    	$persona = NULL;
	    }

	    if (!is_null($persona) && !is_null($category))
	    {
	    	$bread = array('home' => site_url(), $category => site_url() . '/' . $category , $persona => site_url() . '/' . $category . '/' . $persona, $post->post_name => "");
	    }
	}   
} else {
		$bread = array('home' => site_url(), $post->post_name => "");
	}

?>

<div class="container container-small margin-bottom-15 bread-top" >
	<div class="row crumb-row ">
	    <div class="nav-wrapper">
	        <div class="col s12" vocab="http://schema.org/" typeof="BreadcrumbList">
	            <div property="itemListElement" typeof="ListItem">
	            	<?php foreach ($bread as $key => $value): ?>
	                    <a property="item" 
			            typeof="WebPage" 
			            href="<?php echo $value ?>" 
			            class="breadcrumb">
			            <?php echo ucfirst($key) ?>
			            <meta property="name" content="<?php echo $key ?>">
			        </a>
	                <?php endforeach; ?>
	        	</div>
	        </div>
	    </div>
	</div>
</div>