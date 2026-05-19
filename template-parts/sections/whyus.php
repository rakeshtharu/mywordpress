<?php
$section_subtitle = get_sub_field('section_subtitle');
$section_title = get_sub_field('section_title');
$section_description = get_sub_field('section_description');

$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link');
?>

<!-- Why US Start -->
<div class="container-xxl py-5">

    <div class="container">

        <div class="row g-5 align-items-center">

            <!-- Left Content -->
            <div class="col-lg-6 wow fadeInUp"
                 data-wow-delay="0.1s">

                <p class="fs-5 fw-bold text-primary">
                    <?php echo esc_html($section_subtitle); ?>
                </p>

                <h1 class="display-5 mb-4">
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

            <!-- Right Why US -->
            <div class="col-lg-6">

                <div class="row g-4 align-items-center">

                    <?php if (have_rows('section_items')): ?>

                        <?php
                        $count = 0;
                        $delay = 0.3;
                        ?>

                        <!-- Left Column -->
                        <div class="col-md-6">
                            <div class="row g-4">

                                <?php while (have_rows('section_items')): the_row();

                                    $icon = get_sub_field('section_item_icon');
                                    $title = get_sub_field('section_item_title');

                                    $count++;

                                    // First 2 items in left column
                                    if ($count <= 2):
                                ?>

                                <div class="col-12 wow fadeIn"
                                     data-wow-delay="<?php echo esc_attr($delay); ?>s">

                                    <div class="text-center rounded py-5 px-4"
                                         style="box-shadow: 0 0 45px rgba(0,0,0,.08);">

                                        <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                             style="width: 90px; height: 90px;">

                                            <i class="fa <?php echo esc_attr($icon); ?> fa-3x text-primary"></i>

                                        </div>

                                        <h4 class="mb-0">
                                            <?php echo esc_html($title); ?>
                                        </h4>

                                    </div>

                                </div>

                                <?php
                                $delay += 0.2;
                                endif;

                                endwhile;
                                ?>

                            </div>
                        </div>

                    <?php endif; ?>

                    <!-- Right Column -->
                    <div class="col-md-6 wow fadeIn"
                         data-wow-delay="0.7s">

                        <?php
                        if (have_rows('section_items')):

                            $count = 0;

                            while (have_rows('section_items')): the_row();

                                $icon = get_sub_field('section_item_icon');
                                $title = get_sub_field('section_item_title');

                                $count++;

                                // Third item in right column
                                if ($count == 3):
                        ?>

                        <div class="text-center rounded py-5 px-4"
                             style="box-shadow: 0 0 45px rgba(0,0,0,.08);">

                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                 style="width: 90px; height: 90px;">

                                <i class="fa <?php echo esc_attr($icon); ?> fa-3x text-primary"></i>

                            </div>

                            <h4 class="mb-0">
                                <?php echo esc_html($title); ?>
                            </h4>

                        </div>

                        <?php
                                endif;

                            endwhile;

                        endif;
                        ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
<!-- Why US End -->