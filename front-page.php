<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pretty_funxional
 */

get_header();
?>

<main id="primary" class="site-main">



    <section class="container latest-blog pp-social">
        <div class="latest-blog-con">
            <div class="front-page-title-header">
                <p>⎯ Latest Blog Post</p>
            </div>
        </div>
        <div class="front-post-section">

            <article>

                <div class="front-post-container">


                    <?php // Display blog posts on any page @ https://m0n.co/l
                    $temp = $wp_query;
                    $wp_query = null;
                    $wp_query = new WP_Query();
                    $wp_query->query('posts_per_page=1' . '&paged=' . $paged);
                    while ($wp_query->have_posts()):
                        $wp_query->the_post(); ?>
                        <div class="front-thumbnail-con">

                            <?php the_post_thumbnail('single-post-thumbnail'); ?>
                        </div>
                        <div class="front-post-con">
                            <h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
                            <?php the_excerpt(); ?>
                            <footer class="entry-footer continue-reading">
                                <?php echo '<div class="wp-block-read-more"><a href="' . get_permalink() . '" title="' . __('Read More ', 'pretty-funxional') . get_the_title() . '" rel="bookmark">Read More</a></div>'; ?>
                            </footer>
                        </div>
                    <?php endwhile; ?>


                    <?php wp_reset_postdata(); ?>
                </div>
            </article>
        </div>
        <div class="about-and-links">

            <div class="intro-title-name">
                <p>Hi, I'm Cassie</p>
            </div>
            <div class="intro-pic">
                <div class=" pp-social-con">
                    <div class="flying">
                        <div class="wingLeft">
                            <div class="fly"></div>
                            <div class="fly"></div>
                        </div>
                        <div class="wingRight">
                            <div class="fly"></div>
                            <div class="fly"></div>
                        </div>
                    </div>


                    <div class="pp-links-con" id="pp-links-con">

                        <img class="pp" id="navi" src="<?php echo get_template_directory_uri(); ?>/assets/pf-tumi.png"
                            alt="..." />
                        <div class="intro-pic-footer">
                            <div class="social-media-links" id="infoi">
                                <ul>
                                    <a href="https://www.instagram.com/prettyfunxional/">
                                        <li><i class="fa wp-icon pp-icon fa-instagram fa-lg "></i></li>

                                    </a>
                                    <a href="https://www.youtube.com/channel/UC0uP5IbFeeQv6SpjW9EZhvA">
                                        <li><i class="fa wp-icon pp-icon fa-youtube fa-lg"></i></li>

                                    </a>
                                    <a href="https://pin.it/2z2wMsO">
                                        <li><i class="fa wp-icon pp-icon fa-pinterest fa-lg"></i></li>

                                    </a>
                                    <a href="contact/">
                                        <li><i class="fa wp-icon pp-icon fa-envelope fa-lg"></i></li>

                                    </a>
                                </ul>
                            </div>
                            <div class="get_in_touch">
                                <a href="contact/">
                                    <p>Get in Touch <br> ⎯ </p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>





    </section>
    <section class="container popular-products">
        <div class="front-page-title-header">
            <p>⎯ Best Sellers</p>
        </div>
        <div class="best-sellers-container">
            <?php echo do_shortcode('[products popularity columns=4 limit=3]'); ?>
        </div>
        <div class="go-to-shop">

            <a class="woocommerce-shop" href="<?php echo get_permalink(wc_get_page_id('shop')) ?>"
                title="<?php esc_attr_e('View the shop', 'pretty-funxional'); ?>">
                <button class="arrow-button">
                    Go to Shop
                    <span class="arrow"></span>
                </button>


            </a>
        </div>

    </section>


</main><!-- #main -->

<?php

get_footer();