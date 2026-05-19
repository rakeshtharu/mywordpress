<?php
$section_subtitle = get_sub_field('section_subtitle');
$section_title = get_sub_field('section_title');
?>

<!-- Service Start -->
<div class="container-xxl py-5">

    <div class="container">

        <!-- Section Title -->
        <div class="text-center mx-auto wow fadeInUp"
             data-wow-delay="0.1s"
             style="max-width: 500px;">

            <p class="fs-5 fw-bold text-primary">
                <?php echo esc_html($section_subtitle); ?>
            </p>

            <h1 class="display-5 mb-5">
                <?php echo esc_html($section_title); ?>
            </h1>

        </div>

        <!-- Services -->
        <div class="row g-4">

            <?php if (have_rows('services')): ?>

                <?php
                $delay = 0.1;

                while (have_rows('services')): the_row();

                    $section_image = get_sub_field('section_image');
                    $section_icon = get_sub_field('section_icon');
                    $section_name = get_sub_field('section_name');
                    $section_description = get_sub_field('section_description');
                    $section_link = get_sub_field('section_link');
                ?>

                <div class="col-lg-4 col-md-6 wow fadeInUp"
                     data-wow-delay="<?php echo esc_attr($delay); ?>s">

                    <div class="service-item rounded d-flex h-100">

                        <!-- Service Image -->
                        <div class="service-img rounded">

                            <?php if ($section_image): ?>

                                <img class="img-fluid"
                                     src="<?php echo esc_url($section_image['url']); ?>"
                                     alt="<?php echo esc_attr($section_image['alt']); ?>">

                            <?php endif; ?>

                        </div>

                        <!-- Service Content -->
                        <div class="service-text rounded p-5">

                            <!-- Icon -->
                            <div class="btn-square rounded-circle mx-auto mb-3">

                                <?php if ($section_icon): ?>

                                    <img class="img-fluid"
                                         src="<?php echo esc_url($section_icon['url']); ?>"
                                         alt="<?php echo esc_attr($section_icon['alt']); ?>">

                                <?php endif; ?>

                            </div>

                            <!-- Title -->
                            <h4 class="mb-3">
                                <?php echo esc_html($section_name); ?>
                            </h4>

                            <!-- Description -->
                            <p class="mb-4">
                                <?php echo esc_html($section_description); ?>
                            </p>

                            <!-- Button -->
                            <?php if ($section_link): ?>

                            <a class="btn btn-sm"
                               href="<?php echo esc_url($section_link); ?>">

                                <i class="fa fa-plus text-primary me-2"></i>
                                Read More

                            </a>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

                <?php
                $delay += 0.2;

                if ($delay > 0.5) {
                    $delay = 0.1;
                }

                endwhile;
                ?>

            <?php endif; ?>

        </div>

    </div>

</div>
<!-- Service End -->