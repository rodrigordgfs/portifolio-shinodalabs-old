<section class="container projects">
    <div class="section_title grid-16" id="projects">
        <h2><?php the_field('title_projects') ?></h2>
    </div>
    <div class="projects_left grid-8">
        <ul class="project_item">
            <?php if (have_rows('item_projects_left_list')) : while (have_rows('item_projects_left_list')) : the_row(); ?>
                    <li>
                        <a href="<?php the_sub_field('link_item_projects_left_list') ?>" target="_blank">
                            <div class="project_item_image">
                                <img class="project_image" src="<?php the_sub_field('image_item_projects_left_list') ?>" alt="<?php the_sub_field('description_image_item_projects_left_list') ?>" title="<?php the_sub_field('description_image_item_projects_left_list') ?>" />
                                <div class="project_item_image_overlay">
                                    <div class="project_item_image_overlay_icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/eye.png" alt="Icon eye" title="Visualizar" />
                                    </div>
                                </div>
                            </div>
                            <h3><?php the_sub_field('title_item_projects_left_list') ?></h3>
                            <p><?php the_sub_field('description_item_projects_left_list') ?></p>
                        </a>
                    </li>
            <?php endwhile;
            else : endif; ?>
        </ul>
    </div>
    <div class="projects_right grid-8">
        <ul class="project_item">
            <?php if (have_rows('item_projects_right_list')) : while (have_rows('item_projects_right_list')) : the_row(); ?>
                    <li>
                        <a href="<?php the_sub_field('link_item_projects_right_list') ?>" target="_blank">
                            <div class="project_item_image">
                                <img class="project_image" src="<?php the_sub_field('image_item_projects_right_list') ?>" alt="<?php the_sub_field('description_image_item_projects_right_list') ?>" title="<?php the_sub_field('description_image_item_projects_right_list') ?>" />
                                <div class="project_item_image_overlay">
                                    <div class="project_item_image_overlay_icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/eye.png" alt="Icon eye" title="Visualizar" />
                                    </div>
                                </div>
                            </div>
                            <h3><?php the_sub_field('title_item_projects_right_list') ?></h3>
                            <p><?php the_sub_field('description_item_projects_right_list') ?></p>
                        </a>
                    </li>
            <?php endwhile;
            else : endif; ?>
        </ul>
    </div>
</section>