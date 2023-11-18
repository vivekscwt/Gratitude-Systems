<?php
/**
 * Template name: About Page
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
<section class="abt-sc">
  <div class="abt-outer">
     <div class="container">
        <div class="row justify-content-between align-items-center">
           <div class="col-md-6">
              <div class="txt_bx" data-aos="fade-down">
                 <div class="cmn-hdr cmn_otr blk-hd text-left">
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                 </div>
              </div>
           </div>
           <div class="col-md-6 abt-lef">
              <div class="ab_bx" data-aos="fade-up">
                 <div class="ab_bx_in">
                    <?php $content_area_media_type = get_field('content_area_media_type');
                    if($content_area_media_type == 'Image'){
                        $content_area_image = get_field('content_area_image');
                    ?>
                    <img src="<?php echo $content_area_image['url']; ?>" alt="<?php echo $content_area_image['alt']; ?>" />
                    <?php }else{ ?>
                    <?php the_field('content_area_iframe'); ?>
                    <?php } ?>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</section>
<section class="endserv-sc">
  <div class="container">
     <div class="row g-4 justify-content-between align-items-center">
        <div class="col-md-3">
           <div class="cmn-hdr cmn_otr text-left">
              <h2><?php the_field('services_heading'); ?></h2>
           </div>
        </div>
        <?php if(have_rows('add_services')): ?>
        <div class="col-md-9">
           <div class="ylw-boxes">
            <?php while(have_rows('add_services')): the_row(); ?>
              <div class="chain">
                 <div class="chain_box">
                    <?php the_sub_field('service_icon'); ?>
                 </div>
                 <div class="chain_hd">
                    <h3>
                        <?php if(get_sub_field('service_url')){ ?>
                        <a href="<?php the_sub_field('service_url'); ?>">
                        <?php } ?>
                            <?php the_sub_field('service_name'); ?>
                        <?php if(get_sub_field('service_url')){ ?>
                        </a>
                        <?php } ?>
                    </h3>
                 </div>
              </div>
          <?php endwhile; ?>
           </div>
        </div>
        <?php endif; ?>
     </div>
  </div>
  </div>
</section>

<section class="cap_d_sec">
  <div class="container">
     <div class="cmn-hdr cmn_otr blk-hd text-center">
        <h2><?php the_field('capabilities_heading'); ?></h2>
     </div>
     <div class="row g-4 gap">
        <div class="col-lg-6">
           <div class="cap_d_bx">
              <?php the_field('capabilities_left_content'); ?>
           </div>
        </div>
        <div class="col-lg-6">
           <div class="cap_d_bx">
              <?php the_field('capabilities_right_content'); ?>
           </div>
        </div>
     </div>
  </div>
</section>
<?php get_footer();?>
