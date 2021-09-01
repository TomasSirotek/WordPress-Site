<?php 
get_header(); ?>


    <div class="main">      
      <div class="container">

      <?php while(have_posts()) : the_post() ?>
        <img src="<?php the_field("post_cloud")?>" height="128" width="196"/>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
      </div>

      <?php endwhile; ?>
    </div>

    <div class="jumbotron" style="background-image: url('<?php echo get_field('jumbotron_background')['url']; ?>')">
      <div class="container"> 
      <h1>
          <?php the_field("jumbotron") ?>
        </h1>
        <p>
        <?php the_field("jumbotron_description") ?>
        </p>
        <?php 
          $secondButton = get_field('jumbotron_btn');
        ?>
        <a 
        class="btn"
        role='button'
        href="<?php echo $secondButton['url']; ?>"
        target="<?php echo $secondButton['target']; ?>">
        <?php echo $secondButton['title'];?>
       </a>
      </div>
    </div>
  <?php get_footer(); ?>
   