<?php
$section_subtitle = get_sub_field('section_subtitle');
$section_title = get_sub_field('section_title');
?>

<!-- section Start -->
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

        <!-- section Members -->
        <div class="row g-4">

            <?php if (have_rows('section_members')): ?>

                <?php
                $delay = 0.1;

                while (have_rows('section_members')): the_row();

                    $member_image = get_sub_field('member_image');
                    $member_name = get_sub_field('member_name');
                    $member_designation = get_sub_field('member_designation');

                    $facebook = get_sub_field('facebook_link');
                    $twitter = get_sub_field('twitter_link');
                    $instagram = get_sub_field('instagram_link');
                ?>

                <div class="col-lg-4 col-md-6 wow fadeInUp"
                     data-wow-delay="<?php echo esc_attr($delay); ?>s">

                    <div class="team-item rounded">

                        <!-- Image -->
                        <?php if ($member_image): ?>

                            <img class="img-fluid"
                                 src="<?php echo esc_url($member_image['url']); ?>"
                                 alt="<?php echo esc_attr($member_image['alt']); ?>">

                        <?php endif; ?>

                        <!-- Content -->
                        <div class="team-text">

                            <h4 class="mb-0">
                                <?php echo esc_html($member_name); ?>
                            </h4>

                            <p class="text-primary">
                                <?php echo esc_html($member_designation); ?>
                            </p>

                            <!-- Social -->
                            <div class="team-social d-flex">

                                <?php if ($facebook): ?>

                                <a class="btn btn-square rounded-circle me-2"
                                   href="<?php echo esc_url($facebook); ?>"
                                   target="_blank">

                                    <i class="fab fa-facebook-f"></i>

                                </a>

                                <?php endif; ?>

                                <?php if ($twitter): ?>

                                <a class="btn btn-square rounded-circle me-2"
                                   href="<?php echo esc_url($twitter); ?>"
                                   target="_blank">

                                    <i class="fab fa-twitter"></i>

                                </a>

                                <?php endif; ?>

                                <?php if ($instagram): ?>

                                <a class="btn btn-square rounded-circle me-2"
                                   href="<?php echo esc_url($instagram); ?>"
                                   target="_blank">

                                    <i class="fab fa-instagram"></i>

                                </a>

                                <?php endif; ?>

                            </div>

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
<!-- Team End -->