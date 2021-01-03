<?php
// Template Name: Home
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <!-- Introduction -->
    <section class="container introduction">
      <div class="avatar grid-16">
        <img src="<?php echo the_field('image_home') ?>" alt="<?php echo the_field('description_image_home') ?>" data-anime="400" class="fadeInDown" title="<?php echo the_field('description_image_home') ?>" />
      </div>
      <div class="name grid-16 fadeInDown" data-anime="400">
        <h2><?php echo the_field('name_home') ?></h2>
      </div>
      <div class="introduction_title grid-16 fadeInDown" data-anime="800">
        <h1><?php echo the_field('title_home') ?></h1>
      </div>
      <div class="introduction_subtitle grid-16 fadeInDown" data-anime="1200">
        <h3><?php echo the_field('subtitle_home') ?></h3>
      </div>
      <div class="introduction_button grid-16 fadeInDown" data-anime="1600">
        <a href="<?php echo the_field('link_action_home') ?>" target="_blank">
          <p><?php echo the_field('action_home') ?></p>
        </a>
      </div>
    </section>
    </div>

    <!-- Hobbies -->
    <section class="container hobbies">
      <div class="section_title grid-16" id="hobbies">
        <h2>Hobbies</h2>
      </div>
      <div class="hobbie_images grid-1-3">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hobbie-moto.jpg" alt="Hobbie Moto" title="Hobbie Moto" />
        <div class="hobbie_overlay">
          <div class="hobbie_text">
            <p>
              Andar de moto é uma das minhas paixões, sempre que possível estou na
              estrada.
            </p>
          </div>
        </div>
      </div>
      <div class="hobbie_images grid-1-3">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hobbie-game.jpg" alt="Hobbie Game" title="Hobbie Games" />
        <div class="hobbie_overlay">
          <div class="hobbie_text">
            <p>
              "Mãe, jogo online não tem pause!!!"
            </p>
          </div>
        </div>
      </div>
      <div class="hobbie_images grid-1-3">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hobbie-music.jpg" alt="Hobbie Music" title="Hobbie Musica" />
        <div class="hobbie_overlay">
          <div class="hobbie_text">
            <p>Amante daquele bom e velho Rock & Roll.</p>
          </div>
        </div>
      </div>
    </section>

    <div class="separator"></div>

    <!-- Resume -->
    <section class="container resume">
      <div class="section_title grid-16" id="resume">
        <h2>Currículo</h2>
      </div>

      <div class="work_experience grid-8">
        <h3><?php the_field('work_experience') ?></h3>
        <ul class="resume_item">
          <?php if(have_rows('work_experience_list')) : while(have_rows('work_experience_list')) : the_row(); ?>
            <li>
              <a href="<?php the_sub_field('company_link_work_experience') ?>" target="_blank" class="resume_item_title">
                <p><?php the_sub_field('company_work_experience') ?></p>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/link.svg" alt="Link Icon" title="Link" />
              </a>
              <div class="resume_item_subtitle">
                <p><?php the_sub_field('job_position_work_experience') ?></p>
              </div>
              <div class="resume_item_date">
                <p><?php the_sub_field('range_work_experience') ?></p>
              </div>
            </li>
          <? endwhile; else : endif; ?>
        </ul>
      </div>

      <div class="education grid-8">
        <h3><?php the_field('education') ?></h3>
        <ul class="resume_item">
          <?php if(have_rows('education_list')) : while(have_rows('education_list')) : the_row(); ?>
            <li>
              <a href="<?php the_sub_field('link_school_education_list') ?>" target="_blank" class="resume_item_title">
                <p><?php the_sub_field('school_education_list') ?></p>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/link.svg" alt="Link Icon" title="Link" />
              </a>
              <div class="resume_item_subtitle">
                <p><?php the_sub_field('course_education_list') ?></p>
              </div>
              <div class="resume_item_date">
                <p><?php the_sub_field('range_education_list') ?></p>
              </div>
            </li>
          <?php endwhile; else : endif; ?>
        </ul>
      </div>

      <div class="skills grid-8">
        <h3><?php the_field('skill') ?></h3>
        <div class="desing skills_item">
          <ul>
            <?php if(have_rows('skill_design_items')) : while(have_rows('skill_design_items')) : the_row() ?>
              <li><?php the_sub_field('name_skill_design_item') ?></li>
            <?php endwhile; else : endif; ?>
          </ul>
        </div>
        <div class="development skills_item">
          <ul>
            <?php if(have_rows('skill_development_items')) : while(have_rows('skill_development_items')) : the_row() ?>
              <li><?php the_sub_field('name_skill_development_item') ?></li>
            <?php endwhile; else : endif; ?>
          </ul>
        </div>
      </div>

      <div class="online_courses grid-8">
        <h3><?php the_field('course') ?></h3>
        <ul class="resume_item">
          <?php if(have_rows('course_list')) : while(have_rows('course_list')) : the_row(); ?>
            <li>
              <a href="<?php the_sub_field('link_company_course') ?>" target="_blank" class="resume_item_title">
                <p><?php the_sub_field('company_course') ?></p>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/link.svg" alt="Link Icon" title="Link" />
              </a>
              <div class="resume_item_subtitle">
                <p><?php the_field('certificate') ?></p>
              </div>
              <div class="resume_item_list">
                <ul>
                  <?php if(have_rows('item_course_list')) : while(have_rows('item_course_list')) : the_row(); ?>
                    <li>
                      <a href="<?php the_sub_field('link_item_course_list') ?>" target="_blank">
                        <p><?php the_sub_field('name_item_course_list') ?></p>
                      </a>
                    </li>
                  <?php endwhile; else : endif; ?>
                </ul>
              </div>
            </li>
          <?php endwhile; else : endif; ?>
        </ul>
      </div>
    </section>

    <div class="separator"></div>

    <!-- Projects -->
    <section class="container projects">
      <div class="section_title grid-16" id="projects">
        <h2><?php the_field('title_projects') ?></h2>
      </div>
      <ul class="project_item">
        <?php if (have_rows('item_projects_list')) : while (have_rows('item_projects_list')) : the_row(); ?>
            <li class="grid-8">
              <a href="<?php the_sub_field('link_item_projects_list') ?>" target="_blank">
                <div class="project_item_image">
                  <img src="<?php the_sub_field('image_item_projects_list') ?>" alt="<?php the_sub_field('description_image_item_projects_list') ?>" title="<?php the_sub_field('description_image_item_projects_list') ?>" />
                  <div class="project_item_image_overlay">
                    <div class="project_item_image_overlay_icon">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/eye.png" alt="Icon eye" title="Visualizar" />
                    </div>
                  </div>
                </div>
                <h3><?php the_sub_field('title_item_projects_list') ?></h3>
                <p><?php the_sub_field('description_item_projects_list') ?></p>
              </a>
            </li>
        <?php endwhile;
        else : endif; ?>
      </ul>
    </section>

  <?php endwhile;
else : endif; ?>

  <?php get_footer(); ?>