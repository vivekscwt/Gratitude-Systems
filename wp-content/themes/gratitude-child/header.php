<?php
/**
 * The Header for our theme
 *
 * @package WordPress
 * @subpackage gratitude
 * @since gratitude 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
  <meta name="theme-color" content="#181b21">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <div id="prelodaer"></div>
   <header id="header" class="main_header">
      <div class="hdreml-sec">
         <div class="container">
            <div class="eml-sec">
               <div class="eml-group">
                <?php if(get_field('contact_number',2)){ ?>
                  <p><a href="tel:<?php the_field('contact_number',2); ?>"><i class="fa-solid fa-phone"></i> <?php the_field('contact_number',2); ?></a></p>
                <?php } ?>
               </div>
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
      <div class="logo-nav-section">
         <div class="container">
            <div class="logo-nav-row">
               <?php if ( get_header_image() ) : ?>
               <div class="logo">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
               </div>
               <?php endif; ?>
               <div class="nav_and_mail">
                  <span class="toggle-menu"><img src="<?php echo get_stylesheet_directory_uri();?>/images/menu-icon.png" alt=""></span>
                  <nav class="nav_sec">
                     <?php wp_nav_menu( array( 'menu'=>'header_menu', 'container'=> false ) );?>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </header>