<section class="container resume">
      <div class="section_title grid-16" id="resume">
        <h2><?php the_field('resume_title') ?></h2>
      </div>

      <div class="work_experience grid-8">
        <h3><?php the_field('work_experience') ?></h3>
        <ul class="resume_item">
          <?php if(have_rows('work_experience_list')) : while(have_rows('work_experience_list')) : the_row(); ?>
            <li>
              <a href="<?php the_sub_field('company_link_work_experience') ?>" target="_blank" class="resume_item_title">
                <p><?php the_sub_field('company_work_experience') ?></p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/link.svg" alt="Link Icon" title="Link" />
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/link.svg" alt="Link Icon" title="Link" />
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/link.svg" alt="Link Icon" title="Link" />
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