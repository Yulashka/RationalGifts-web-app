<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title itemprop='name'><?php trim(wp_title('')); ?><?php if(wp_title('', false)) { echo ': '; } ?><?php bloginfo('name'); ?></title>
        <?php if(  (isset($_SESSION['isHome']) && ($_SESSION['isHome']!=null)))  { 
            $imageUrl = "http://rationalgifts.com/wp-content/uploads/2016/06/screenshot.jpg";
            $desc = get_bloginfo('description');
        } else if (get_post_type( get_the_ID() ) === 'page') { 
            $imageUrl = "http://rationalgifts.com/wp-content/uploads/2016/06/screenshot.jpg";
            $desc = get_bloginfo('description');
        } else { 
            $imageUrl = get_the_post_thumbnail_url() ;
            $post_data = $wp_query->get_queried_object();
            $post_content = $post_data->post_content;
            $desc = wp_trim_words($post_content, 20);
        };
        if( isset($_SESSION['isHome']) && $_SESSION['isHome']!=null)  { 
            $pageUrl = get_home_url();
        } else { 
            $pageUrl = get_permalink();
        };
        ?>

		<link href="//www.google-analytics.com" rel="dns-prefetch">        
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php echo $desc; ?>">
	    <link rel="canonical" href="<?php echo $pageUrl;?>" itemprop="url">
	    <!-- Facebook Meta Tags -->
	    <meta property="og:title" content="<?php trim(wp_title('')); ?><?php if(wp_title('', false)) { echo ': '; } ?><?php bloginfo('name'); ?>"/>
	    <meta property="og:type" content="e-commerce"/>
	    <meta property="og:image" content="<?php echo $imageUrl;?>"/>
	    <meta property="og:url" content="<?php echo $pageUrl;?>"/>
	    <meta property="og:description" content="<?php echo $desc; ?>"/>

	    <!-- CSS http://materializecss.com/ -->
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<!-- header -->
		<header role="banner">

			<nav role="navigation">
            <div class="nav-wrapper container container-small">
                <a id="logo-container" href="<?php bloginfo('url'); ?>" class="brand-logo">Rational Gifts</a>
                <ul class="right hide-on-med-and-down">
                     <li class="drop-it-like-its-hot">
                        <a class='dropdown-button' href='#' data-activates='dropdown2'>
                            <span class="left">Gifts for Women</span>
                            <i class="material-icons left">arrow_drop_down</i>
                        </a>
                        <!-- Dropdown Structure -->
                        <ul id='dropdown2' class='dropdown-content'>
                            <li class="all"><a href="#">Women</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php bloginfo('url'); ?>/women">All personas</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/women/climber">Climber</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/women/crossfitter">Crossfitter</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/women/hiker">Hiker</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/women/runner">Runner</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/women/skier">Skier</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/women/yogi">Yogi</a></li>
                        </ul>
                    </li>
                    <li class="drop-it-like-its-hot">
                        <a class='dropdown-button' href='#' data-activates='dropdown1'>
                            <span class="left">Gifts for Men</span>
                            <!--[if !IE]><!-->
                            <i class="material-icons left">arrow_drop_down</i>
                            <!--<![endif]-->
                        </a>
                        <!-- Dropdown Structure -->
                        <ul id='dropdown1' class='dropdown-content'>
                            <li class="all"><a href="#">Men</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php bloginfo('url'); ?>/men">All personas</a>
                            <li><a href="<?php bloginfo('url'); ?>/men/climber">Climber</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/men/crossfitter">Crossfitter</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/men/hiker">Hiker</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/men/runner">Runner</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/men/skier">Skier</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/men/yogi">Yogi</a></li>
                        </ul>
                    </li>
                    <li><?php get_template_part( 'searchform' ); ?></li>
                </ul>
                <ul id="nav-mobile" class="side-nav text-color">
                    <a href="<?php bloginfo('url'); ?>" id="nav-logo">Rational Gifts</a>
                    <li><?php get_template_part( 'searchform' ); ?></li>
                    <li>
                        <ul class="collapsible" data-collapsible="accordion">
                            <li>
                              <div class="collapsible-header nav-color">Gifts for Women <i class="material-icons right">arrow_drop_down</i></div>
                              <div class="collapsible-body">
                                    <ul>
                                        <li class="all"><a href="<?php bloginfo('url'); ?>/women">All personas</a>
                                        </li>
                                        <li><a href="<?php bloginfo('url'); ?>/women/climber">Climber</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>/women/crossfitter">Crossfitter</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>/women/hiker">Hiker</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>/women/runner">Runner</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>/women/skier">Skier</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>/women/yogi">Yogi</a></li>
                                    </ul>
                              </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul class="collapsible" data-collapsible="accordion">
                            <li>
                              <div class="collapsible-header nav-color">Gifts for Men <i class="material-icons right">arrow_drop_down</i></div>
                              <div class="collapsible-body">
                                    <ul>
                                        <li><a href="<?php bloginfo('url'); ?>/men">All personas</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>/men/climber">Climber</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>/men/crossfitter">Crossfitter</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>/men/hiker">Hiker</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>/men/runner">Runner</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>/men/skier">Skier</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>/men/yogi">Yogi</a></li>
                                    </ul>
                              </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>

	</header>
	<!-- /header -->
    <main>
