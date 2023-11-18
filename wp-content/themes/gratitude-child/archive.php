<?php
/**
 * The template for displaying Archive pages
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
      <h1>
      <?php
        if ( is_day() ) :
          printf( __( 'Daily Archives: %s', 'twentyfourteen' ), get_the_date() );

        elseif ( is_month() ) :
          printf( __( 'Monthly Archives: %s', 'twentyfourteen' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyfourteen' ) ) );

        elseif ( is_year() ) :
          printf( __( 'Yearly Archives: %s', 'twentyfourteen' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyfourteen' ) ) );

        else :
          _e( 'Archives', 'twentyfourteen' );

        endif;
      ?>
      </h1>
      <div class="News_and_Insights_listing">
        <div class="left_sec">
          <?php if ( have_posts() ) : ?>
          <div class="news_listing">
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="each_news">
                <?php $ID = get_the_ID();
                $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $ID ), 'blog-thumb' );
                $alt_text = get_post_meta(get_post_thumbnail_id( $ID ), '_wp_attachment_image_alt', true);
                if($thumbnail[0]){
                ?>             
                  <img src="<?php echo $thumbnail[0];?>" alt="<?php echo $alt_text;?>">
                <?php }?>
                  <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                  <span class="date_and_category"><i><?php the_time(__('F jS, Y', 'kubrick')) ?></i> <i><?php printf(get_the_category_list(', ')); ?></i></span>
                  <p>
                    <?php 
                      $content = get_the_content();
                          $the_content = strip_tags($content);
                      if(strlen($the_content)>245){
                      $the_content = substr($the_content,0,245).'....';
                      echo $the_content;
                      }else{
                      echo $the_content;
                      }     
                    ?>
                  <a href="<?php the_permalink();?>">Read More</a></p>
              </div>
            <?php endwhile; ?>
            <div class="next_prev">
              <?php next_posts_link(__('Next >>', 'kubrick')) ?>
              <?php previous_posts_link(__('<< Previous', 'kubrick')) ?>
            </div>
          </div>
          <?php else : ?>
          <div class="news_listing"><div class="each_news"><p>No Post Found..</p></div></div>
          <?php endif; ?>
        </div>
        <div class="right_sec">
          <div class="right_sidebar">
            <?php dynamic_sidebar( 'news-sidebar' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>