<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
	    <link rel="canonical" href="https://rationalgifts.com/" itemprop="url">
	    <title itemprop='name'>Rational Gifts</title>
	    
	    <!-- Facebook Meta Tags -->
	    <meta property="og:title" content="Rational Gifts"/>
	    <meta property="og:type" content="e-commerce"/>
	    <meta property="og:image" content="http://rationalgifts.com/pictures/snipet.jpg"/>
	    <meta property="og:url" content="http://rationalgifts.com"/>
	    <meta property="og:description" content="Online gift shop cutomized by personality. Do you want to find something special for your loved ones, something good quality, great meaning and reasonable price? You don't know what are you looking for ... no problem! 
	Rational Gifts is the place where all your wishes comes true. We categorize gifts by activity type to make shopping easy. You will find gifts that you friends really need, not some useless things, they will hide on the top shelf! Era of meaningful gifts is here! Shopping has never been easier!"/>

	    <!-- CSS http://materializecss.com/ -->
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	    <link rel="icon" type="image/png" href="favicon.png">


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
