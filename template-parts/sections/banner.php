<?php
$page_banner_bg = get_sub_field('page_banner_background');
$page_banner_title = get_sub_field('page_banner_title');

$breadcrumb_home_text = get_sub_field('breadcrumb_home_text');
$breadcrumb_home_link = get_sub_field('breadcrumb_home_link');

$breadcrumb_parent_text = get_sub_field('breadcrumb_parent_text');
$breadcrumb_parent_link = get_sub_field('breadcrumb_parent_link');

$breadcrumb_current = get_sub_field('breadcrumb_current');
?>

<!-- Page Banner Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn"
     data-wow-delay="0.1s"

     <?php if ($page_banner_bg): ?>
     style="background: url('<?php echo esc_url($page_banner_bg['url']); ?>') center center / cover no-repeat;"
     <?php endif; ?>>

    <div class="container text-center py-5">

        <!-- Title -->
        <?php if ($page_banner_title): ?>

            <h1 class="display-3 text-white mb-4 animated slideInDown">

                <?php echo esc_html($page_banner_title); ?>

            </h1>

        <?php endif; ?>

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb"
             class="animated slideInDown">

            <ol class="breadcrumb justify-content-center mb-0">

                <!-- Home -->
                <?php if ($breadcrumb_home_text): ?>

                <li class="breadcrumb-item">

                    <a href="<?php echo esc_url($breadcrumb_home_link); ?>">

                        <?php echo esc_html($breadcrumb_home_text); ?>

                    </a>

                </li>

                <?php endif; ?>

                <!-- Parent -->
                <?php if ($breadcrumb_parent_text): ?>

                <li class="breadcrumb-item">

                    <a href="<?php echo esc_url($breadcrumb_parent_link); ?>">

                        <?php echo esc_html($breadcrumb_parent_text); ?>

                    </a>

                </li>

                <?php endif; ?>

                <!-- Current -->
                <?php if ($breadcrumb_current): ?>

                <li class="breadcrumb-item active"
                    aria-current="page">

                    <?php echo esc_html($breadcrumb_current); ?>

                </li>

                <?php endif; ?>

            </ol>

        </nav>

    </div>

</div>
<!-- Page Banner End -->