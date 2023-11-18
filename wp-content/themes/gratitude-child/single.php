<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage okontec
 * @since Okontec 1.0
 */

get_header(); ?>
<?php $ID = 15;
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $ID ), 'full_image' );
?>
<div class="inner-banner-area w-100 d-flex align-items-center" style="background-image:url(<?php echo $thumbnail[0];?>)">
  <div class="container">
    <div class="banner-content">
      <?php the_field('add_banner_content',15);?>
    </div>
  </div>
</div>
<!--  -->
<div class="innerbody-panel w-100">
  <div class="container">
    <div class="main-content w-100">
      <h1><?php echo get_the_title(15);?></h1>
      <div class="News_and_Insights_listing">
        <div class="row">
        <div class="col-lg-8">
        <div class="left_sec">
        <?php if ( have_posts() ) : while(have_posts()): the_post(); ?>
          <div class="content_area">
            <h3><?php the_title();?></h3>
            <span class="date_and_category"><i><?php the_time(__('F jS, Y', 'kubrick')) ?></i> <i><?php printf(get_the_category_list(', ')); ?></i></span>
            <?php the_content();?>
            <?php echo do_shortcode('[wp_social_sharing social_options="facebook,twitter,googleplus,linkedin" twitter_username="redtreeboston" facebook_text="Share on Facebook" twitter_text="Share on Twitter" googleplus_text="Share on Google+"" linkedin_text="Share on Linkedin" icon_order="f,t,g,l" show_icons="1"]');?>
            <a class="back_btn" href="<?php print $_SERVER['HTTP_REFERER'];?>"><< Back</a>
          </div>
        <?php endwhile; endif;?>
        </div>
        </div>

        <div class="col-lg-4">
        <div class="right_sec">
          <div class="right_sidebar">
            <?php dynamic_sidebar( 'news-sidebar' ); ?>
          </div>
        </div>
        </div>
        </div>

      </div>
    </div>
  </div>
</div>
<?php get_footer();?>
