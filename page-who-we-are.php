<?php
/**
 * 
 * Template Name: Who We Are
 * 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordpress
 */

get_header();
?>



<main id="primary" class="site-main">


    <?php if (have_rows('who_we_are')): ?>
        <?php while (have_rows('who_we_are')):
            the_row(); ?>



            <?php
            if (get_row_layout() == 'hero'):
                $title = get_sub_field('hero_heading');
                $description = get_sub_field('hero_info');
                $image = get_sub_field('hero_img');
                ?>
                <section class="section section--hero pb-0">
                    <div class="wrap">

                        <figure>
                            <div class="row align-center">
                                <div class="col-6">
                                    <div class="hero__title">
                                        <h1 class="text-white">
                                            <?php echo $title; ?>
                                        </h1>

                                        <p>
                                            <?php echo $description; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="hero__img">
                                        <?php
                                        $size = 'full';
                                        if ($image) { ?>
                                            <img src="<?php echo $image['url']; ?>">
                                        <?php } ?>
                                    </div>

                                </div>
                            </div>
                        </figure>

                    </div>
                </section>

            <?php endif; ?>
            <?php
            if (get_row_layout() == 'circle_awaits'):
                $title = get_sub_field('circle_heading');
                $info = get_sub_field('circle_info');

                ?>
                <section class="section section--circle">
                    <div class="wrap">
                        <figure>
                            <div class="section__title text-center mb-64">
                                <h2 class="mb-48">
                                    <?php echo $title; ?>
                                </h2>
                                <p class="fs-20">
                                    <?php echo $info; ?>
                                </p>
                            </div>
                        </figure>
                        <div class="row">
                            <?php
                            if (have_rows('circle_block')):


                                while (have_rows('circle_block')):
                                    the_row();


                                    $sub_image = get_sub_field('circle_img');
                                    $sub_title = get_sub_field('circle_block_heading');
                                    $sub_value = get_sub_field('circle_block_info');
                                    // Do something...
                
                                    ?>
                                    <div class="col-3">
                                        <div class="circle__block">
                                            <?php
                                            $size = 'full';
                                            if ($sub_image) { ?>
                                                <img src="<?php echo $sub_image['url']; ?>">
                                            <?php } ?>
                                            <h6 class="mt-40">
                                                <?php echo $sub_title; ?>
                                            </h6>
                                            <p>
                                                <?php echo $sub_value; ?>
                                            </p>
                                        </div>
                                    </div>

                                <?php endwhile;


                            endif; ?>

                        </div>
                    </div>
                </section>
            <?php endif; ?>

            <?php
            if (get_row_layout() == 'app'):
                $title = get_sub_field('app_heading');
                $info = get_sub_field('app_info');
                $storeimage = get_sub_field('app_store');
                $appimage = get_sub_field('app_store_2');
                $image = get_sub_field('app_img');
                ?>

                <section class="section section--app">
                    <div class="wrap">
                        <figure>
                            <div class="row align-center">
                                <div class="col-6">
                                    <div class="section__title text-center">
                                        <h2 class="mb-48">
                                            <?php echo $title; ?>
                                        </h2>
                                        <p>
                                            <?php echo $info; ?>
                                        </p>
                                        <div class="app__store__img">
                                            <?php
                                            $size = 'full';
                                            if ($storeimage) { ?>
                                                <img src="<?php echo $storeimage['url']; ?>">
                                            <?php } ?>
                                            <?php
                                            $size = 'full';
                                            if ($appimage) { ?>
                                                <img src="<?php echo $appimage['url']; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="app__img">
                                        <?php
                                        $size = 'full';
                                        if ($image) { ?>
                                            <img src="<?php echo $image['url']; ?>">
                                        <?php } ?>
                                    </div>

                                </div>
                            </div>
                        </figure>
                    </div>
                </section>
            <?php endif; ?>

            <?php
            if (get_row_layout() == 'reviews'):
                $title = get_sub_field('reviews_heading');
                $image = get_sub_field('reviews_img');
                $description = get_sub_field('reviews_text');
                $info = get_sub_field('reviews_info');
                ?>

                <section class="section section--testimonial">
                    <div class="wrap">
                        <figure>
                            <div class="section__title text-center">
                                <h2 class="mb-64">
                                    <?php echo $title; ?>
                                </h2>
                                <div class="testimonial__block">
                                    <?php
                                    $size = 'full';
                                    if ($image) { ?>
                                        <img src="<?php echo $image['url']; ?>">
                                    <?php } ?>
                                    <p>
                                        <?php echo $description; ?>
                                    </p>
                                    <p class="mt-30">
                                        <?php echo $info; ?>
                                    </p>
                                </div>

                            </div>
                        </figure>
                    </div>
                </section>
            <?php endif; ?>



            <?php
            if (get_row_layout() == 'connect'):

                ?>
                <section class="section section--connect pb-0 mb-24">
                    <div class="wrap">
                        <div class="row">
                            <?php
                            if (have_rows('connect_repeater')):


                                while (have_rows('connect_repeater')):
                                    the_row();


                                    $sub_image = get_sub_field('connect_img');
                                    $sub_title = get_sub_field('connect_heading');
                                    $sub_value = get_sub_field('connect_info');
                                    // Do something...
                
                                    ?>
                                    <div class="col-4">
                                        <div class="connect__block">
                                            <div class="connect__img">


                                                <?php
                                                $size = 'full';
                                                if (!empty($sub_image)) {
                                                    $url = get_field('url');
                                                    ?>
                                                    <a href="<?php echo $url; ?>" target="_blank">
                                                        <img src="<?php echo $sub_image['url']; ?>"
                                                            alt="<?php echo $sub_image['alt']; ?>" /></a>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                            <div class="connect__info">
                                                <?php
                                                if ($sub_title):
                                                    $link_url = $sub_title['url'];
                                                    $link_title = $sub_title['title'];
                                                    $link_target = $sub_title['target'] ? $sub_title['target'] : '_self';
                                                    ?>
                                                    <a class="h5" href="<?php echo esc_url($link_url); ?>"
                                                        target="<?php echo esc_attr($link_target); ?>">
                                                        <?php echo esc_html($link_title); ?>
                                                    </a>
                                                <?php endif; ?>
                                                <p>
                                                    <?php echo $sub_value; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                <?php endwhile;

                            endif; ?>

                        </div>
                    </div>
                </section>
            <?php endif; ?>

            <?php
            if (get_row_layout() == 'getit'):
                $title = get_sub_field('getit_heading');
                $image = get_sub_field('getit_img_1');
                $imageplay = get_sub_field('getit_img_2');

                ?>

                <section class="section section--getit">
                    <div class="wrap">
                        <div class="section__heading text-center">
                            <h2 class="text-white">
                                <?php echo $title; ?>
                            </h2>
                            <div class="getit__block">

                                <?php
                                $size = 'full';
                                if (!empty($image)) {
                                    $url = get_field('url');
                                    ?>
                                    <a href="<?php echo $url; ?>" target="_blank"><img src="<?php
                                       echo $image['url']; ?>" alt="<?php
                                         echo $image['alt']; ?>" /></a>
                                    <?php
                                }
                                ?>
                                <?php
                                $size = 'full';
                                if (!empty($imageplay)) {
                                    $url = get_field('url');
                                    ?>
                                    <a href="<?php echo $url; ?>" target="_blank"><img src="<?php
                                       echo $imageplay['url']; ?>" alt="<?php
                                         echo $imageplay['alt']; ?>" /></a>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>

                    </div>
                </section>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>




</main><!-- #main -->



<?php
get_sidebar();
get_footer();