<?php
$section_image = get_sub_field('section_image');
$section_number = get_sub_field('section_number');
$section_label = get_sub_field('section_label');
$section_title = get_sub_field('section_title');
$section_description = get_sub_field('section_description');
$section_button_text = get_sub_field('section_button_text');
$section_button_link = get_sub_field('section_button_link');
?>

<!-- section Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-end">

            <!-- Image -->
            <div class="col-lg-3 col-md-5 wow fadeInUp">
                <?php if ($section_image): ?>
                    <img class="img-fluid rounded" src="<?php echo esc_url($section_image['url']); ?>" alt="<?php echo esc_attr($section_image['alt']); ?>">
                <?php endif; ?>
            </div>

            <!-- Content -->
            <div class="col-lg-6 col-md-7 wow fadeInUp">
                <h1 class="display-1 text-primary mb-0">
                    <?php echo esc_html($section_number); ?>
                </h1>
                <p class="text-primary mb-4">
                    <?php echo esc_html($section_label); ?>
                </p>

                <h1 class="display-5 mb-4">
                    <?php echo esc_html($section_title); ?>
                </h1>

                <p class="mb-4">
                    <?php echo esc_html($section_description); ?>
                </p>

                <?php if ($section_button_link): ?>
                    <a class="btn btn-primary py-3 px-4" href="<?php echo esc_url($section_button_link); ?>">
                        <?php echo esc_html($section_button_text); ?>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Features -->
            <div class="col-lg-3 col-md-12 wow fadeInUp">
                <div class="row g-5">

                    <?php if (have_rows('section_features')): ?>
                        <?php while (have_rows('section_features')): the_row(); 
                            $icon = get_sub_field('feature_icon');
                            $title = get_sub_field('feature_title');
                            $desc = get_sub_field('feature_description');
                        ?>
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="border-start ps-4">
                                <i class="fa <?php echo esc_attr($icon); ?> fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3"><?php echo esc_html($title); ?></h4>
                                <span><?php echo esc_html($desc); ?></span>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- section End -->