<!-- ====== START CONTACT ======  -->
<section class="sections contact" id="contact" data-scroll-index="5">
    <div class="container">
        <div class="row">


            <!-- START CONTACT SECTION TITLE -->
            <div class="cont-title col-md-5">
                <?php the_field('contacts'); ?>
                <ul class="info">
                    <?php if (have_rows('repeter_contact')): ?>


                        <?php while (have_rows('repeter_contact')): the_row(); ?>

                            <li>
                                <span class="icon icon-<?php the_sub_field('icon'); ?>"></span>
                                <p><?php the_sub_field('name'); ?></p>
                            </li>


                        <?php endwhile; ?>

                    <?php endif; ?>

                </ul>
            </div>
            <!-- END CONTACT SECTION TITLE -->


            <!-- START CONTACT FORM -->
            <div class="contact-form col-md-7">

                <?php echo do_shortcode('[contact-form-7 id="133" html_class="cont-fo"]'); ?>

            </div>
            <!-- END CONTACT FORM -->


        </div>
    </div>
</section>
<!-- ====== END CONTACT ======  -->