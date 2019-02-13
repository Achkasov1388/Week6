<!-- ====== START TESTIMONIALS ======  -->
<section class="testimonials text-center">
    <div class="testimonials-overlay sections">
        <div class="container">
            <div class="row">


                <div class="title">
                    <h3><?php the_field('heading_testimonial'); ?></h3>
                    <div class="devider"></div>
                </div>


                <?php if (have_rows('reviews')): ?>
                    <div class="owl-carousel owl-theme">

                        <?php while (have_rows('reviews')): the_row(); ?>
                            <!-- TESTIMONIALS ITEM -->
                            <div class="t-item">
                                <div class="testimonial-box col-md-8 col-xs-12">
                                    <div class="features">

                                        <p><?php the_sub_field('text'); ?></p>
                                        <!-- TESTIMONIAL NAME -->
                                        <h3><?php the_sub_field('name'); ?>
                                            <span><?php the_sub_field('position'); ?></span></h3>

                                    </div>

                                </div>
                            </div>
                        <?php endwhile; ?>


                    </div>
                <?php endif; ?>


            </div>
        </div>
    </div>
</section>
<!-- ====== END TESTIMONIALS ======  -->