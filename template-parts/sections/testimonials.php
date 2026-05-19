<?php
$section_subtitle = get_sub_field('section_subtitle');
$section_title = get_sub_field('section_title');
$section_description = get_sub_field('section_description');

$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link');
?>

<!-- Testimonial Start -->
<div class="container-xxl py-5">

    <div class="container">

        <div class="row g-5">

            <!-- Left Content -->
            <div class="col-lg-5 wow fadeInUp"
                 data-wow-delay="0.1s">

                <p class="fs-5 fw-bold text-primary">
                    <?php echo esc_html($section_subtitle); ?>
                </p>

                <h1 class="display-5 mb-5">
                    <?php echo esc_html($section_title); ?>
                </h1>

                <p class="mb-4">
                    <?php echo esc_html($section_description); ?>
                </p>

                <?php if ($button_link): ?>

                <a class="btn btn-primary py-3 px-4"
                   href="<?php echo esc_url($button_link); ?>">

                    <?php echo esc_html($button_text); ?>

                </a>

                <?php endif; ?>

            </div>

            <!-- Testimonials -->
            <div class="col-lg-7 wow fadeInUp"
                 data-wow-delay="0.5s">

                <div class="owl-carousel testimonial-carousel">

                    <?php if (have_rows('testimonials')): ?>

                        <?php while (have_rows('testimonials')): the_row();

                            $client_image = get_sub_field('client_image');
                            $client_review = get_sub_field('client_review');
                            $client_name = get_sub_field('client_name');
                            $client_designation = get_sub_field('client_designation');
                        ?>

                        <div class="testimonial-item">

                            <!-- Image -->
                            <?php if ($client_image): ?>

                                <img class="img-fluid rounded mb-3"
                                     src="<?php echo esc_url($client_image['url']); ?>"
                                     alt="<?php echo esc_attr($client_image['alt']); ?>">

                            <?php endif; ?>

                            <!-- Review -->
                            <p class="fs-5">
                                <?php echo esc_html($client_review); ?>
                            </p>

                            <!-- Name -->
                            <h4>
                                <?php echo esc_html($client_name); ?>
                            </h4>

                            <!-- Designation -->
                            <span>
                                <?php echo esc_html($client_designation); ?>
                            </span>

                        </div>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>

</div>
<!-- Testimonial End -->