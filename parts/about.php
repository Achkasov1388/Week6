<!-- ====== START ABOUT ======  -->
<section class="sections about" id="about" data-scroll-index="2">
    <div class="container">
        <div class="row">


            <!-- START ABOUT PICTURE -->
            <div class="col-lg-4 col-md-5 ab-pic">

                <?php if (get_field('about_bg')) : ?>

                    <img src="<?php echo get_field('about_bg')['sizes']['about_bg']; ?>" style="width: 100%;" alt="About picture" />

                <?php endif; ?>

            </div>
            <!-- END ABOUT PICTURE -->


<!-- START ABOUT CONTENT -->
<div class="col-lg-8 col-md-7 ab-cont">

    <?php the_field('about_text'); ?>

    <?php if (have_rows('feature')): ?>

        <div class="features">

            <?php while (have_rows('feature')): the_row(); ?>
                <p>
                    <span class="icon icon-<?php the_sub_field('icon'); ?>"></span>
                    <?php the_sub_field('text'); ?>
                </p>
            <?php endwhile; ?>

        </div>

    <?php endif; ?>

</div>
<!-- END ABOUT CONTENT -->
</div>
</div>
</section>
<!-- ====== END ABOUT ======  -->