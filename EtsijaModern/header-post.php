<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Etsijä</title>

  <style>
  @import url('https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed&display=swap');
  @import url('https://fonts.googleapis.com/css?family=Caveat|Didact+Gothic|Josefin+Sans|Julius+Sans+One|Lexend+Deca|Lobster|Montserrat|Pacifico|Questrial|Yanone+Kaffeesatz&display=swap&subset=latin-ext');
  </style>

  <?php wp_head('new');?>
</head>

<body>

  <div class="ylaosa">
    <div class="logo_post">
    	<ul>
        <li> <?php
    		 $custom_logo_id = get_theme_mod( 'custom_logo' );
    		 $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    				?>
    	<img src="<?php echo $image[0]; ?>" class="logo" alt="">
    </li>
    <li>
    	<h3><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h3>
    </li>

<li>

  <?php
  wp_nav_menu( array(
      'theme_location' => 'my-custom-menu',
      'container_class' => 'custom-menu-class' ) );
  ?>

</li>
  </ul>



<!-- navi
<ul class="navi">
<li><p> Otsikko 1</p></li>
<li> <p>Otsikko 2</p></li>
<li><p> Otsikko 3<p></li>

</ul>
-->

  </div>


    </div>
