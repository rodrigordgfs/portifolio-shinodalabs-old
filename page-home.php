<?php
  // Template Name: Home
  get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <!-- Introduction -->
    <?php include(TEMPLATEPATH . '/includes/introduction.php') ?>

    <!-- Hobbies -->
    <?php include(TEMPLATEPATH . '/includes/hobbies.php') ?>

    <div class="separator"></div>

    <!-- Resume -->
    <?php include(TEMPLATEPATH . '/includes/resume.php') ?>

    <div class="separator"></div>

    <!-- Projects -->
    <?php include(TEMPLATEPATH . '/includes/projects.php') ?>

  <?php endwhile;
else : endif; ?>

  <?php get_footer(); ?>