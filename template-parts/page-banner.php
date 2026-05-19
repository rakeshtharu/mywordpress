<?php
$banner_bg = get_field('page_banner_background', 'option');
?>

<!-- Page Banner Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn"
     data-wow-delay="0.1s"

     style="background: url('<?php echo esc_url($banner_bg['url']); ?>') center center / cover no-repeat;">

    <div class="container text-center py-5">

        <h1 class="display-3 text-white mb-4 animated slideInDown">
            <?php the_title(); ?>
        </h1>

       <nav aria-label="breadcrumb" class="animated slideInDown">

    <ol class="breadcrumb justify-content-center mb-0">

        <!-- Home -->
        <li class="breadcrumb-item">
            <a href="<?php echo home_url(); ?>">
                Home
            </a>
        </li>

        <?php
        // Get parent pages
        $parents = get_post_ancestors(get_the_ID());

        if ($parents) :

            $parents = array_reverse($parents);

            foreach ($parents as $parent_id) :
        ?>

            <li class="breadcrumb-item">

                <a href="<?php echo get_permalink($parent_id); ?>">

                    <?php echo get_the_title($parent_id); ?>

                </a>

            </li>

        <?php
            endforeach;

        endif;
        ?>

        <!-- Current Page -->
        <li class="breadcrumb-item active" aria-current="page">

            <?php the_title(); ?>

        </li>

    </ol>

</nav>

    </div>

</div>
<!-- Page Banner End -->