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