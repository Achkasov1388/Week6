<!-- ====== START EXPERIENCES ======  -->
<section class="sections experiences">
    <div class="container">
        <div class="row">


            <!-- START EXPERIENCES LEFT SIDE -->
            <div class="col-md-5 exp-lf">
                <?php the_field('left_text'); ?>
            </div>
            <!-- END EXPERIENCES LEFT SIDE -->


            <!-- START SKILLS -->
            <?php if (have_rows('achieving')): ?>

                <div class="skills col-md-7">

                    <ul>


                        <?php while (have_rows('achieving')): the_row(); ?>

                            <li>
                                <span> <?php the_sub_field('text'); ?></span>
                                <div class="progress">
                                    <div class="progress-bar"
                                         data-percent="<?php the_sub_field('percent'); ?>"
                                         style="width: <?php the_sub_field('percent'); ?>%;">
                                        <span><?php the_sub_field('percent'); ?>%</span>
                                    </div>
                                </div>
                            </li>

                        <?php endwhile; ?>
                    </ul>

                </div>
                <!-- END SKILLS -->
            <?php endif; ?>

        </div>
    </div>
</section>
<!-- ====== END EXPERIENCES ======  -->