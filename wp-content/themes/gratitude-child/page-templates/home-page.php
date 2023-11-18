<?php
/**
 Template Name: Home Page
*/
get_header();
?>
<?php if(have_rows('add_slider')): ?>
<section class="banner">
  <div class="banner_main_slider">
    <?php while(have_rows('add_slider')): the_row();?>
     <div class="item">
        <div class="banner-each-slider" style="background-image:url(<?php the_sub_field('slider_image'); ?>);">
           <div class="container">
              <div class="banner_slider">
                 <div class="slidetxt" data-aos="fade-up" data-aos-duration="2000">
                    <?php the_sub_field('slider_heading'); ?>
                    <?php 
                      $content = get_sub_field('slider_content');
                      $the_content = strip_tags($content);
                      if(strlen($the_content)>320){
                      $the_content = substr($the_content,0,320);
                      echo '<p>'.$the_content.'</p>';
                      }else{
                      echo '<p>'.$the_content.'</p>';
                      }     
                    ?>                    
                    <?php if(get_sub_field('button_label')){ ?>
                      <a class="header_btn" href="<?php the_sub_field('button_link'); ?>"><span><?php the_sub_field('button_label'); ?></span></a>
                    <?php } ?>
                 </div>
              </div>
           </div>
        </div>
     </div>
    <?php endwhile; ?>
  </div>
</section>
<?php endif; ?>

<section class="best-sc">
  <div class="container">
     <div class="cmn-hdr cmn_otr text-center">
        <?php if(get_field('section_heading_why')){ ?>
          <h2 class=""><?php the_field('section_heading_why'); ?></h2>
        <?php } ?>
     </div>
     <?php if(have_rows('callouts')): ?>
     <div class="solzmain_outr">
        <div class="vous__outr" data-aos="fade-up">
           <div class="row justify-content-center">
            <?php while(have_rows('callouts')): the_row();?>
              <div class="col-lg-4 col-md-6 bstsl">
                  <?php if(get_sub_field('link_url')){ ?>
                 <a href="<?php the_sub_field('link_url'); ?>">
                  <?php } ?>
                    <div class="vous_bx">
                       <div class="vous_pic">
                          <div class="bstsl_txt">
                             <div class="bstsl_ic">
                              <?php $icon_type = get_sub_field('icon_type');
                                if($icon_type == 'Image'){
                                  $image_icon = get_sub_field('image_icon');
                              ?>
                                <img src="<?php echo $image_icon['url'] ?>" alt="<?php echo $image_icon['alt'] ?>">
                              <?php }else{?>
                                <?php the_sub_field('svg_icon'); ?>
                              <?php } ?>
                             </div>
                              <?php 
                                $heading = get_sub_field('heading');
                                $the_heading = strip_tags($heading);
                                if(strlen($the_heading)>25){
                                  $the_heading = substr($the_heading,0,25);
                                  echo '<h3>'.$the_heading.'</h3>';
                                }else{
                                  echo '<h3>'.$the_heading.'</h3>';
                                }     
                              ?>  
                              <?php 
                                $content = get_sub_field('short_description');
                                $the_content = strip_tags($content);
                                if(strlen($the_content)>100){
                                $the_content = substr($the_content,0,100);
                                echo '<p>'.$the_content.'</p>';
                                }else{
                                echo '<p>'.$the_content.'</p>';
                                }     
                              ?> 
                          </div>
                       </div>
                    </div>
                  <?php if(get_sub_field('link_url')){ ?>
                 </a>
                  <?php } ?>
              </div>
            <?php endwhile; ?>
           </div>
        </div>
     </div>
    <?php endif ?>
  </div>
</section>

<?php if(have_rows('add_news')): ?>
<?php $background_image = get_field('background_image'); ?>
<section class="vw-sec" style="background-image: url('<?php if($background_image){ echo $background_image; }else{ echo get_stylesheet_directory_uri().'images/ve-bk.jpg'; } ?>');background-attachment: fixed;background-repeat: no-repeat;background-size: cover;">
  <div class="container">
     <div class="plan aos-init aos-animate" data-aos="fade-up">
        <div class="row align-items-center">
           <div class="col-md-3">
              <div class="cmn-hdr cmn_otr text-left">
                 <h2><?php the_field('section_heading_news'); ?></h2>
              </div>
           </div>
           <div class="col-md-9">
              <div class="vwslider">
                 <div class="vwslider_slider">
                  <?php while(have_rows('add_news')): the_row();?>
                    <div class="slide">
                       <div class="slidetxt">
                        <?php if(get_sub_field('news_link')){ ?>
                          <a href="<?php echo get_sub_field('news_link'); ?>" target="_blank">
                        <?php } ?>
                            <?php 
                              $heading = get_sub_field('news_heading');
                              $the_heading = strip_tags($heading);
                              if(strlen($the_heading)>225){
                                $the_heading = substr($the_heading,0,225);
                                echo '<p>'.$the_heading.'</p>';
                              }else{
                                echo '<p>'.$the_heading.'</p>';
                              }     
                            ?>
                        <?php if(get_sub_field('news_link')){ ?>
                          </a>
                        <?php } ?>
                       </div>
                    </div>
                  <?php endwhile; ?>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</section>
<?php endif; ?>

<section class="abt-sc">
  <div class="abt-outer">
     <div class="container">
        <div class="row justify-content-between align-items-center">
           <div class="col-md-6">
              <div class="txt_bx" data-aos="fade-down">
                 <div class="cmn-hdr cmn_otr blk-hd text-left">
                    <?php if(get_field('section_heading_about')){ ?>
                      <h2><?php the_field('section_heading_about'); ?></h2>
                    <?php } ?>
                    <?php 
                      $content = get_sub_field('section_content_about');
                      $the_content = strip_tags($content);
                      if(strlen($the_content)>230){
                      $the_content = substr($the_content,0,230);
                      echo '<p>'.$the_content.'</p>';
                      }else{
                      echo '<p>'.$the_content.'</p>';
                      }     
                    ?> 
                    <p>Gratitude Systems is a technology & people company based in Washington DC. We help our customers select, design, deploy and manage the right technology solutions.
                    </p>
                    <?php if(get_field('button_link_about')){ ?>
                    <a class="header_btn yl-btn" href="<?php the_field('button_link_about'); ?>" tabindex="-1"><span><?php the_field('button_label_about'); ?></span></a>
                    <?php } ?>
                 </div>
              </div>
           </div>
           <div class="col-md-6 abt-lef">
              <div class="ab_bx" data-aos="fade-up">
                 <div class="ab_bx_in">
                  <?php $media_type = get_field('media_type'); ?>
                  <?php if($media_type=='Image'){
                        $upload_image = get_field('upload_image');
                  ?>
                    <img src="<?php echo $upload_image['url']; ?>" alt="<?php echo $upload_image['alt']; ?>" />
                  <?php }else{ ?>
                    <?php the_field('iframe_code'); ?>
                  <?php } ?>
                  <?php if(get_field('exprience_year')){ ?>
                    <div class="yr_bx" data-aos="fade-up">
                       <div class="yr-tx">
                          <h5><span><?php the_field('exprience_year'); ?></span><br>years of <br>exprience</h5>
                       </div>
                    </div>
                  <?php } ?>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</section>

<?php if(have_rows('add_customer')): ?>
<?php $background_image_customer = get_field('background_image_customer'); ?>
<section class="vw-sec"
  style="background-image: url('<?php if($background_image_customer){ echo $background_image_customer; }else{ echo get_stylesheet_directory_uri().'images/ve-bk.jpg'; } ?>');background-attachment: fixed;background-repeat: no-repeat;background-size: cover;">
  <div class="container">
     <div class="plan aos-init aos-animate" data-aos="fade-up">
        <div class="row align-items-center">
           <div class="col-md-3">
              <div class="cmn-hdr cmn_otr text-left">
                 <h2><?php the_field('section_heading_customer'); ?></h2>
              </div>
           </div>
           <div class="col-md-9">
              <div class="vwslider">
                 <div class="icon_slider">
                  <?php while(have_rows('add_customer')): the_row();
                      $customer_logo = get_sub_field('customer_logo');
                  ?>
                    <div class="slide">
                       <div class="icnlog">
                        <?php if(get_sub_field('customer_url')){ ?>
                          <a href="<?php the_sub_field('customer_url'); ?>" target="_blank">
                        <?php } ?>
                          <img src="<?php echo $customer_logo['url']; ?>" alt="<?php echo $customer_logo['alt']; ?>" />
                        <?php if(get_sub_field('customer_url')){ ?>
                          </a>
                        <?php } ?>
                       </div>
                    </div>
                  <?php endwhile; ?>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</section>
<?php endif; ?>

<?php if(have_rows('add_skill')): ?>
<section class="best-sc expertise">
  <div class="container">
     <div class="cmn-hdr cmn_otr blk-hd text-center">
      <?php if(get_field('section_heading_expertise')){ ?>
        <h2 class=""><?php the_field('section_heading_expertise'); ?></h2>
      <?php } ?>
     </div>
     <div class="solzmain_outr">
        <div class="vous__outr" data-aos="fade-up">
           <div class="row">
            <?php while(have_rows('add_skill')): the_row(); ?>
              <div class="col-lg-4 col-md-6 bstsl">
                 <?php if(get_sub_field('link_url')){ ?>
                 <a href="<?php the_sub_field('link_url'); ?>">
                  <?php } ?>
                    <div class="vous_bx">
                       <div class="vous_pic">
                          <div class="bstsl_txt">
                             <div class="bstsl_ic">
                              <?php $icon_type = get_sub_field('icon_type');
                                if($icon_type == 'Image'){
                                  $image_icon = get_sub_field('image_icon');
                              ?>
                                <img src="<?php echo $image_icon['url'] ?>" alt="<?php echo $image_icon['alt'] ?>">
                              <?php }else{?>
                                <?php the_sub_field('svg_icon'); ?>
                              <?php } ?>
                             </div>
                              <?php 
                                $heading = get_sub_field('heading');
                                $the_heading = strip_tags($heading);
                                if(strlen($the_heading)>30){
                                  $the_heading = substr($the_heading,0,30);
                                  echo '<h3>'.$the_heading.'</h3>';
                                }else{
                                  echo '<h3>'.$the_heading.'</h3>';
                                }     
                              ?>  
                              <?php 
                                $content = get_sub_field('short_description');
                                $the_content = strip_tags($content);
                                if(strlen($the_content)>380){
                                $the_content = substr($the_content,0,380);
                                echo '<p>'.$the_content.'</p>';
                                }else{
                                echo '<p>'.$the_content.'</p>';
                                }     
                              ?> 
                          </div>
                       </div>
                    </div>
                 <?php if(get_sub_field('link_url')){ ?>
                 </a>
                 <?php } ?>
              </div>
            <?php endwhile; ?>
           </div>
        </div>
     </div>
  </div>
</section>
<?php endif; ?>

<?php if(have_rows('add_performance')): ?>
<section class="tab-sec">
  <div class="container">
     <div class="cmn-hdr cmn_otr text-center">
        <h2 class="">some of our Success <span>Past performance</span></h2>
     </div>
     <div id="">
        <ul class="post-list-new p-0">
          <?php while(have_rows('add_performance')): the_row(); ?>
           <li><span><?php the_sub_field('performance_topic'); ?></span></li>
          <?php endwhile; ?>
        </ul>
        <div class="tab-body-slider">
          <?php while(have_rows('add_performance')): the_row(); ?>
           <div class="tab-content">
              <div class="tb-txt">
                 <div class="row align-items-center">
                    <div class="col-md-4 abt-lef">
                       <div class="ab_bx aos-init aos-animate" data-aos="fade-up">
                          <?php $upload_image = get_sub_field('upload_image');
                          if($upload_image){
                          ?>
                          <div class="ab_bx_in">
                            <img src="<?php echo $upload_image['url']; ?>" alt="<?php echo $upload_image['alt']; ?>">
                          </div>
                          <?php } ?>
                       </div>
                    </div>
                    <div class="col-md-8">
                       <div class="txt_bx aos-init aos-animate" data-aos="fade-down">
                          <div class="cmn-hdr cmn_otr blk-hd">
                             <h2><?php the_sub_field('performance_topic'); ?></h2>
                             <?php if(get_sub_field('performance_subheading')){ ?>
                             <h5><?php the_sub_field('performance_subheading'); ?></h5>
                             <?php } ?>
                          </div>
                          <?php the_sub_field('performance_details'); ?>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
          <?php endwhile; ?>
        </div>
     </div>
  </div>
  </div>
</section>
<?php endif; ?>

<?php if(have_rows('modes_of_engagement')): ?>
<section class="best-sc engaged">
  <div class="container">
     <div class="cmn-hdr cmn_otr text-center blk-hd ">
      <?php if(get_field('section_heading_engagement')){ ?>
        <h2 class=""><?php the_field('section_heading_engagement'); ?></h2>
      <?php } ?>
     </div>
     <div class="solzmain_outr">
        <div class="vous__outr aos-init aos-animate" data-aos="fade-up">
           <div class="row justify-content-center">
            <?php while(have_rows('modes_of_engagement')): the_row(); ?>
              <div class="col-lg-4 col-md-6 bstsl">
                <?php if(get_sub_field('link')){ ?>
                 <a href="<?php the_sub_field('link'); ?>">
                 <?php } ?>
                    <div class="vous_bx">
                       <div class="vous_pic">
                          <div class="bstsl_txt d-flex align-items-center">
                             <?php if(get_sub_field('svg_icon')){ ?>
                             <div class="">
                                <?php the_sub_field('svg_icon'); ?>
                             </div>
                             <?php } ?>
                             <h3><?php the_sub_field('add_label'); ?></h3>
                          </div>
                       </div>
                    </div>
                <?php if(get_sub_field('link')){ ?>
                 </a>
               <?php } ?>
              </div>
            <?php endwhile; ?>
           </div>
        </div>
     </div>
  </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>