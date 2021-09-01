<?php get_header(); ?>
    <div class="main">      
      <div class="container">

      <?php while(have_posts()) : the_post() ?>
        <img src="<?php the_field("post_cloud")?>" height="128" width="196"/>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
      </div>

      <?php endwhile; ?>
    </div>

    <div class="jumbotron">
      <div class="container"> 
      <h1>
          <?php the_field("jumbotron") ?>
        </h1>
        <p>
          Receive weekly insights from industry insiders.
        </p>
        <a class="btn" href="">Join</a>
      </div>
    </div>
  <?php get_footer(); ?>
   