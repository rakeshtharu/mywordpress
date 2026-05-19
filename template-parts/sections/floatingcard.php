<?php
$section_items = get_sub_field('section_items');
?>

<!-- Top Feature Start -->
<div class="container-fluid top-feature py-5 pt-lg-0">

    <div class="container py-5 pt-lg-0">

        <div class="row gx-0">

            <?php if ($section_items): ?>

                <?php
                $delay = 0.1;

                foreach ($section_items as $item):

                    $icon = $item['section_icon'];
                    $title = $item['section_title'];
                    $description = $item['section_description'];
                ?>

                    <div class="col-lg-4 wow fadeIn"
                        data-wow-delay="<?php echo esc_attr($delay); ?>s">

                        <div class="bg-white shadow d-flex align-items-center h-100 px-5"
                            style="min-height: 160px;">

                            <div class="d-flex">

                                <!-- Icon -->
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">

                                    <i class="fa <?php echo esc_attr($icon); ?> text-primary"></i>

                                </div>

                                <!-- Content -->
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
                endforeach;
                ?>

            <?php endif; ?>

        </div>

    </div>

</div>
<!-- Top Feature End -->