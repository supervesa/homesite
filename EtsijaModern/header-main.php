<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- värit
<div class="Oranssi">
  Oranssi
</div>
<div class="Punainen">
  Punainen
</div>
<div class="Vihrea">
  Vihreä
</div>
<div class="Sininen">
  Sininen
</div>
-->

<!--
<div id="toggle">
<img src="hamburger-menu.png" alt="Show" /></div>
<div id="popout">
<?php wp_nav_menu( array( 'theme_location' => 'my-custom-menu', 'menu_class' => 'nav-menu' ) ); ?>
</div>
-->


  <div class="blog-header">
    <div class="header-wrapper">
      <div class="logo">
        <ul>
        <li> <?php
         $custom_logo_id = get_theme_mod( 'custom_logo' );
         $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            ?>
      <img src="<?php echo $image[0]; ?>" class="logo" alt="">
      <li>
        <h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
      </li>
      </li>
      <li>

        <?php
        wp_nav_menu( array(
            'theme_location' => 'my-custom-menu',
            'container_class' => 'custom-menu-class' ) );
        ?>

      </li>
    </div>



    </li>
  </ul>

    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

</div>
  </div>



  <title>Etsijä</title>

  <style>
  @import url('https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed&display=swap');
  </style>

  <?php wp_head();?>
</head>

<body>

  <div class="ylaosa">
    <div class="container">

    </div>
  </div>

  <div class="container">


    </div>
