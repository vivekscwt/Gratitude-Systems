<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>
<section class="innr-banner" style="background-image:url(<?php echo get_stylesheet_directory_uri().'/images/dummy-bnr.jpg';?>);">
    <div class="container">
        <div class="banner_slider">
            <div class="slidetxt" data-aos="fade-up" data-aos-duration="2000">
                <h1><?php _e('Error 404 - Not Found', 'kubrick'); ?></h1>
            </div>
        </div>
    </div>
</section>
<section class="inner-content-wrapper">
    <div class="container">
      <div style="text-align:center;" class="content-section">
        <p><img style="display:inline-block;" alt="404" src="<?php bloginfo('stylesheet_directory'); ?>/images/404_1.png"></p>
        <h1>Whoops!</h1>
        <p>We're sorry, but the page you're looking for can't be found</p>
        <p>Back to <b><a href="<?php echo get_option('home'); ?>">Home</a></b></p>
      </div>
    </div>
</section>
<?php get_footer(); ?>
