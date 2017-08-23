<?php get_header(); 
$bread = array('home' => site_url(), '404'=>'' );
?>

<div class="container container-small margin-bottom-15 margin-top" >
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

<div class="container container-small" id="display-container">
	<div class="row margin-bottom-10" id="display-row">
        <div class="col s12">
            <div class="row">

				<!-- article -->
				<article id="post-404">

					<h1>Page not found</h1>
					
					<a href="<?php echo home_url(); ?>">Lets go back home</a>
					

				</article>
				<!-- /article -->
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
