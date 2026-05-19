<?php
$counter_bg = get_sub_field('section_image');
?>

<!-- Counter Start -->
<div class="container-fluid facts my-5 py-5"
     data-parallax="scroll"
     data-image-src="<?php echo esc_url($counter_bg['url']); ?>">

    <div class="container py-5">
        <div class="row g-5">

            <?php if (have_rows('counter_items')): ?>

                <?php
                $delay = 0.1;

                while (have_rows('counter_items')): the_row();

                    $number = get_sub_field('counter_number');
                    $label = get_sub_field('counter_label');
                ?>

                <div class="col-sm-6 col-lg-3 text-center wow fadeIn"
                     data-wow-delay="<?php echo esc_attr($delay); ?>s">

                    <h1 class="display-4 text-white"
                        data-toggle="counter-up">
                        <?php echo esc_html($number); ?>
                    </h1>

                    <span class="fs-5 fw-semi-bold text-light">
                        <?php echo esc_html($label); ?>
                    </span>

                </div>

                <?php
                $delay += 0.2;
                endwhile;
                ?>

            <?php endif; ?>

        </div>
    </div>
</div>
<!-- Counter End -->