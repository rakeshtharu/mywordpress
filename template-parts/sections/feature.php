<!-- Top section Start -->
<div class="container-fluid top-section py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">

        <div class="row gx-0">

            <?php if (have_rows('top_features')): ?>

                <?php
                $delay = 0.1;

                while (have_rows('top_features')): the_row();

                    $icon = get_sub_field('section_icon');
                    $title = get_sub_field('section_title');
                    $description = get_sub_field('section_description');
                ?>

                <div class="col-lg-4 wow fadeIn"
                     data-wow-delay="<?php echo esc_attr($delay); ?>s">

                    <div class="bg-white shadow d-flex align-items-center h-100 px-5"
                         style="min-height: 160px;">

                        <div class="d-flex">

                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa <?php echo esc_attr($icon); ?> text-primary"></i>
                            </div>

                            <div class="ps-3">

                                <h4>
                                    <?php echo esc_html($title); ?>
                                </h4>

                                <span>
                                    <?php echo esc_html($description); ?>
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

                <?php
                $delay += 0.2;
                endwhile;
                ?>

            <?php endif; ?>

        </div>

    </div>
</div>
<!-- Top section End -->