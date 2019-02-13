<!-- ====== START FACTS ======  -->
<section class="sections facts">
    <div class="container">
        <div class="row">


            <!-- START FACTS TITLE -->
            <div class="facts-title col-md-8">
                <?php the_field('facts'); ?>
            </div>
            <!-- END FACTS TITLE -->


            <!-- START FACTS CONTENT -->
            <?php if (have_rows('schot')): ?>

                <div class="facts-c col-md-12">

                    <?php while (have_rows('schot')): the_row(); ?>


                        <!-- FUN FACTS ITEM -->
                        <div class="fact-item col-md-3">
                            <div class="counting-icon">
                            </div>
                            <!-- NUMBER -->
                            <span class="count" data-from="0" data-to="<?php the_sub_field('clacc'); ?>">0</span>
                            <!-- TITLE -->
                            <h4><?php the_sub_field('name'); ?></h4>
                        </div>

                    <?php endwhile; ?>

                </div>
            <?php endif; ?>


        </div>
    </div>
</section>
<!-- ====== END FACTS ======  -->
