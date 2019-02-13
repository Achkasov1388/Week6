<!-- ====== START FOOTER ======  -->
<section class="sections footer">
    <div class="container">
        <div class="row">

            <!-- START FOOTER LOGO -->
            <div class="ft-logo col-md-3 col-sm-4 col-xs-7">
                <!-- logo -->
                <?php if (get_field('logo')) : ?>
                    <!-- FOOTER LOGO -->
                    <img class="white-logo" src="<?php echo get_field('footer_logo')['sizes']['footer_logo']; ?>"
                         alt="footer_logo"/>
                <?php endif; ?>

            </div>
            <!-- END FOOTER LOGO -->


            <!-- START SOCIAL ICONS -->

            <?php if (have_rows('footer_link')): ?>
                <div class="sc-icon">

                    <?php while (have_rows('footer_link')): the_row(); ?>

                        <a href="<?php the_sub_field('link'); ?>">
							<span>
								<i class="fa fa-<?php the_sub_field('icon'); ?>" aria-hidden="true"></i>
							</span>
                        </a>


                    <?php endwhile; ?>

                </div>

            <?php endif; ?>

            <!-- START RIGHTS -->
            <div class="sub-footer">
                <h5><?php the_field('text_copirate'); ?></h5>
            </div>


        </div>
    </div>
</section>
<!-- ====== END FOOTER ======  -->
<?php wp_footer(); ?>

</body>
</html>
