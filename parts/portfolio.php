<!-- ====== START WORK ======  -->
<section class="sections text-center work" id="work" data-scroll-index="3">

    <?php

    $portfolio_categories = get_terms(['taxonomy' => 'portfolio_category']);

    if (!empty($portfolio_categories)): ?>
        <div class="container">
            <div class="row">


                <!-- START WORK TITLE -->
                <div class="col-md-9 wo-title">
                    <?php the_field('portfolio_text'); ?>
                </div>
                <!-- END WORK TITLE -->


                <!-- WORK FILTER BUTTONS -->
                <div class="button-group filter-work">
                    <a class="button is-checked" data-filter="*">All</a>

                    <?php foreach ($portfolio_categories as $term) : ?>

                        <a class="button" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></a>

                    <?php endforeach; ?>
                </div>
                <!-- END WORK FILTER BUTTONS -->

            </div>
        </div>

    <?php endif; ?>



    <?php
    $portfolio = new WP_Query([
        'post_type' => "portfolio",
        'posts_per_page' => 6
    ]);
    if ($portfolio->have_posts()):
        ?>


        <!-- WORK CONTENT START -->
        <div class="work-content">
                <?php while ($portfolio->have_posts()): ?>
                    <?php
                    $portfolio->the_post();
                    setup_postdata($portfolio->post);

                    $class = '';
                    $post_terms = wp_get_post_terms(get_the_ID(), ['taxonomy' => 'portfolio_category']);

                    foreach ($post_terms as $post_term) {
                        $class .= ' ' . $post_term->slug;
                    }

                    ?>
                    <!-- WORK ITEM -->
                    <div class="work-item <?php echo $class; ?>">
                        <div class="work-caption">

                            <!-- WORK IMAGE -->
                            <?php the_post_thumbnail(); ?>

                            <!-- WORK TITLE -->
                            <div class="overlay">
                                <div class="info-content">
                                    <h4><?php the_title(); ?></h4>
                                    <p>
                                        <?php
                                        foreach ($post_terms as $post_term) {
                                            echo $post_term->name . ', ';
                                        }
                                        ?>
                                    </p>
                                </div>
                                <div class="know-more">
                                    <a class="modal-image" href="<?php echo get_the_post_thumbnail_url($portfolio->post); ?>">
                                        <span class="icon icon-focus"></span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                <?php endwhile; ?>

        </div>

    <?php endif; ?>

    <?php wp_reset_postdata(); ?>


</section>
<!-- ====== END WORK ======  -->