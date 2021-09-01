<!DOCTYPE html>
<html <?php language_attributes() ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,100' rel='stylesheet' type='text/css'>
    <?php wp_head();?>
    <title><?php bloginfo("name") ?></title>
  </head>
  <body>
    <div class="header" style="background-image: url(<?php echo get_template_directory_uri()?>/images/bg.jpg);">
      <div class="container">
        <h1>
        <?php bloginfo("name")?>
        </h1>
        <p>
        <?php bloginfo("description")?>
        </p>
        <a class="btn" href="">Learn More</a>
      </div>
    </div>