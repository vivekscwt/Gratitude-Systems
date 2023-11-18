<?php
/**
 * The template for displaying all pages
 *
 * @package WordPress
 * @subpackage gratitude
 * @since gratitude 1.0
 */
get_header();
$ID = get_the_ID();
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $ID ), 'full_image' );
?>
<!--  BANNER SLIDER  -->
<section class="innr-banner" style="background-image:url(<?php if($thumbnail){ echo $thumbnail[0]; }else{ echo get_stylesheet_directory_uri().'/images/dummy-bnr.jpg'; }?>);">
    <div class="container">
        <div class="banner_slider">
            <div class="slidetxt" data-aos="fade-up" data-aos-duration="2000">
                <h1><?php if( get_field('banner_heading') ){ the_field('banner_heading'); }else{ echo get_the_title(); } ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php site_url(); ?>">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="inner-content-wrapper">
    <div class="container">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer();?>
