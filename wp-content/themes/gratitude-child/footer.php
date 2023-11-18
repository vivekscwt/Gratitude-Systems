<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage gratitude
 * @since gratitude 1.0
 */
?>
<footer class="main_footer">
  <div class="container">
     <div class="ftrsec">
        <div class="d-sm-flex justify-content-between align-items-center">
          <?php $footer_logo_left = get_field('footer_logo_left',2);
          if($footer_logo_left){
          ?>
           <div class="ft-logo">
              <a class="shww" href="<?php echo site_url(); ?>"> <img src="<?php echo $footer_logo_left['url']; ?>" alt="<?php echo $footer_logo_left['alt']; ?>" /> </a>
           </div>
          <?php } ?>
          <?php $footer_logo_right = get_field('footer_logo_right',2);
          if($footer_logo_right){
          ?>
           <div class="ft-logo">
              <a class="shww" href="<?php the_field('footer_logo_right_link',2) ?>" target="_blank"> <img src="<?php echo $footer_logo_right['url']; ?>" alt="<?php echo $footer_logo_right['alt']; ?>" /> </a>
           </div>
          <?php } ?>
        </div>
        <hr>
        <div class="d-sm-flex justify-content-between ftr-dwn">
           <p class="m-0"><?php the_field('copyright_text',2); ?></p>
           <?php if(have_rows('add_social',2)): ?>
           <div class="scl-sec">
              <ul>
                <?php while(have_rows('add_social',2)): the_row()?>
                 <li> <a href="<?php the_sub_field('social_link'); ?>" target="_blank"><i class="<?php the_sub_field('icon_class'); ?>"></i></a> </li>
                <?php endwhile; ?>
              </ul>
           </div>
          <?php endif; ?>
        </div>
     </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>