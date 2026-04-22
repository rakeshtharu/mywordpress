<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide hero-carousel" data-bs-ride="carousel">

        <div class="carousel-inner">

            <?php if (have_rows('slides')):
                $i = 0;
                while (have_rows('slides')): the_row();

                    $image = get_sub_field('section_images');
                    $heading = get_sub_field('section_title');
                    $btn_text = get_sub_field('button_text');
                    $btn_url = get_sub_field('button_url');

                    $image_url = is_array($image) ? $image['url'] : wp_get_attachment_image_url($image, 'full');
                    $image_alt = is_array($image) ? $image['alt'] : '';
            ?>

                    <div class="carousel-item <?php echo ($i === 0) ? 'active' : ''; ?> hero-slide">

                        <div class="hero-image-wrapper">
                            <img class="hero-img" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                        </div>
                        <!-- <img class="carousel-img" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>"> -->

                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">

                                        <h1 class="display-1 text-white mb-5">
                                            <?php echo esc_html($heading); ?>
                                        </h1>

                                        <?php if ($btn_text && $btn_url): ?>
                                            <a href="<?php echo esc_url($btn_url); ?>" class="btn btn-primary py-sm-3 px-sm-4">
                                                <?php echo esc_html($btn_text); ?>
                                            </a>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

            <?php
                    $i++;
                endwhile;
            endif;
            ?>

        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>
</div>