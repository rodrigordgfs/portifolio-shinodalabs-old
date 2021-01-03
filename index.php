<?php get_header(); ?>
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  
    <section class="container">
      <div class="grid-16"><?php the_title() ?></div>
      <div class="grid-16"><?php the_content() ?></div>
    </section>

  <?php endwhile; else : ?>
    <section class="container">
      <div class="grid-16">
        <p><?php _e('Sorry, no posts matched criteria.') ?></p>
      </div>
    </section>
  <?php endif;?>
  
<?php get_footer(); ?>