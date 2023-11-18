<?php
/**
 * Template Name: Contact Page
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
<section class="contact_sec">
    <div class="container">
        <div class="row">
            <?php if(have_rows('add_contact')): ?>
            <div class="col-md-6" data-aos="fade-down">
                <?php while(have_rows('add_contact')): the_row(); ?>
                <div class="contact_box">
                    <div class="contact_info">
                        <?php the_sub_field('icon_svg'); ?>
                    </div>
                    <h4><?php the_sub_field('label'); ?></h4>
                    <p><?php the_sub_field('details'); ?></p>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>

            <div class="col-md-6">
                <div class="from_box" data-aos="fade-up">
                    <?php the_content(); ?>
                    <?php echo do_shortcode(get_field('contact_form_shortcode')); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if(get_field('google_map_iframe_code')){ ?>
<div class="contact_map">
    <div class="container">
        <?php the_field('google_map_iframe_code'); ?>
    </div>
</div>
<?php } ?>
<?php get_footer();?>
