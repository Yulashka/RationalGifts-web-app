<?php $_SESSION['isHome'] = true; ?>
<?php get_header(); ?>

<div class="row" id="main-row">
    <div class="row center">
        <h1 class="header col s12 light">Who are you shopping for?</h5>
    </div>
</div>
<div class="row main-page">
    <div class="col s12 l6">
        <div class="card">
            <a href="women">
                <img src="<?php bloginfo('template_directory'); ?>/pictures/women/women.jpg" class="responsive-img" alt="Blond woman in white long dress and sunglasses standing on a yaht.">
                <span class="float-bottom-right"><p class="flow-text pic-text">Women</p></span>
            </a>
        </div>
    </div>
    <div class="col s12 l6">
        <div class="card">
            <a href="men">
                <img src="<?php bloginfo('template_directory'); ?>/pictures/men/men.jpg" class="responsive-img" alt="Blond man in dark blue suit and sunglasses standing on a yaht.">
                <span class="float-bottom-right"><p class="flow-text pic-text">Men</p></span>
            </a>
        </div>
    </div>
</div>


<?php get_footer(); ?>
