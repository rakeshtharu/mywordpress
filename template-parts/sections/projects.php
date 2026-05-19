<?php
$section_subtitle = get_sub_field('section_subtitle');
$section_title = get_sub_field('section_title');
?>

<!-- Projects Start -->
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

        <!-- Filters -->
        <div class="row wow fadeInUp" data-wow-delay="0.3s">

            <div class="col-12 text-center">

                <ul class="list-inline rounded mb-5" id="portfolio-flters">

                    <li class="mx-2 active" data-filter="*">
                        All
                    </li>

                    <?php if (have_rows('project_filters')): ?>

                        <?php while (have_rows('project_filters')): the_row();

                            $filter_slug = get_sub_field('filter_slug');
                            $filter_name = get_sub_field('filter_name');
                        ?>

                        <li class="mx-2"
                            data-filter=".<?php echo esc_attr($filter_slug); ?>">

                            <?php echo esc_html($filter_name); ?>

                        </li>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </ul>

            </div>

        </div>

        <!-- Projects -->
        <div class="row g-4 portfolio-container">

            <?php if (have_rows('projects')): ?>

                <?php
                $delay = 0.1;

                while (have_rows('projects')): the_row();

                    $image = get_sub_field('project_image');
                    $title = get_sub_field('project_title');
                    $category = get_sub_field('project_category');
                    $link = get_sub_field('project_link');
                ?>

                <div class="col-lg-4 col-md-6 portfolio-item <?php echo esc_attr($category); ?> wow fadeInUp"
                     data-wow-delay="<?php echo esc_attr($delay); ?>s">

                    <div class="portfolio-inner rounded">

                        <?php if ($image): ?>

                            <img class="img-fluid"
                                 src="<?php echo esc_url($image['url']); ?>"
                                 alt="<?php echo esc_attr($image['alt']); ?>">

                        <?php endif; ?>

                        <div class="portfolio-text">

                            <h4 class="text-white mb-4">
                                <?php echo esc_html($title); ?>
                            </h4>

                            <div class="d-flex">

                                <?php if ($image): ?>

                                <a class="btn btn-lg-square rounded-circle mx-2"
                                   href="<?php echo esc_url($image['url']); ?>"
                                   data-lightbox="portfolio">

                                    <i class="fa fa-eye"></i>

                                </a>

                                <?php endif; ?>

                                <?php if ($link): ?>

                                <a class="btn btn-lg-square rounded-circle mx-2"
                                   href="<?php echo esc_url($link); ?>">

                                    <i class="fa fa-link"></i>

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
<!-- Projects End -->