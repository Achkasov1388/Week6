<!-- ====== START SERVICES ======  -->
<section class="services sections" id="services" data-scroll-index="1">
    <div class="container">
        <div class="row">


            <!-- SERVICES TITLE START -->
            <div class="col-md-5">
                <div class="serv-title">
                    <?php the_field('services_heading'); ?>
                </div>
            </div>
            <!-- SERVICES TITLE END -->


            <!-- SERVICES CONTENT START -->
            <?php if (have_rows('sub_services')): ?>

                <div class="serv-cont col-md-7">

                    <?php while (have_rows('sub_services')): the_row(); ?>

                        <div class="serv-c col-md-6">
                            <div class="serv-item">
                                <!-- SERVICE ICON -->
                                <div class="serv-icon">
                                    <span class="icon icon-overlay icon-<?php the_sub_field('icon'); ?>"></span>
                                    <span class="icon icon-<?php the_sub_field('icon'); ?>"></span>
                                </div>
                                <!-- SERVICE CONTENT -->
                                <div class="serv-cont">
                                    <h3><?php the_sub_field('name'); ?></h3>
                                    <p><?php the_sub_field('text'); ?></p>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>


                </div>

            <?php endif; ?>


        </div>
    </div>
</section>
<!-- ====== END SERVICES ======  -->
