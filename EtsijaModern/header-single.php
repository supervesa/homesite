<!--
Theme Name: Etsija
Author: Vesa Nessling
Description: Etsijän verkkojulkaisu-alusta
Version: 0.0.1
Tags: etsija sky
the rest of the content -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <div class="Oranssi">
  Oranssi
</div>
<div class="Punainen">
  Punainen
</div>
<div class="Vihrea">
  Vihreä
</div>
<div class="Blue">
  Sininen
</div>

  <div class="blog-header">
    <div class="logo">
      <li> <?php
         $custom_logo_id = get_theme_mod( 'custom_logo' );
         $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            ?>
      <img src="<?php echo $image[0]; ?>" class="logo" alt="">
    </li>
    <li>
      <h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
    </li>
    <li>  <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
    </li>
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
