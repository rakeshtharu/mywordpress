<?php
$section_bg = get_sub_field('section_background_image');
$section_title = get_sub_field('section_title');
$quote_form_shortcode = get_sub_field('quote_form_shortcode');
?>

<!-- Quote Start -->
<div class="container-fluid quote my-5 py-5"
     data-parallax="scroll"
     data-image-src="<?php echo esc_url($section_bg['url']); ?>">

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="bg-white rounded p-4 p-sm-5 wow fadeIn"
                     data-wow-delay="0.5s">

                    <!-- Title -->
                    <h1 class="display-5 text-center mb-5">
                        <?php echo esc_html($section_title); ?>
                    </h1>

                    <!-- Form -->
                    <?php if ($quote_form_shortcode): ?>

                        <?php echo do_shortcode($quote_form_shortcode); ?>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>

</div>
<!-- Quote End -->