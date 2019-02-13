<?php

$prices = get_field('group');

?>

<!-- ====== START PRICES ======  -->
<section class="sections prices" id="price" data-scroll-index="4">
    <div class="container">
        <div class="row">


            <!-- START PRICE TITLE -->
            <div class="price-title col-md-4">
                <?php the_field('opisanie'); ?>

                <!-- START PRICING TABLES TABS -->
                <?php if (count($prices)): ?>
                    <div class="pricing-tabs">
                        <ul class="price-tabs" role="tablist">
                            <?php foreach ($prices as $index => $value) :
                                $class = '';
                                if ($index == 0) {
                                    $class = 'active';
                                }
                                ?>
                                <li role="presentation" class="<?php echo $class; ?>">
                                    <a href="#<?php echo $value['class']; ?>"
                                       aria-controls="<?php echo $value['class']; ?>" role="tab" data-toggle="tab">
                                        <?php echo $value['name']; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <!-- END PRICING TABLES TABS -->
            </div>
            <!-- END PRICE TITLE -->


            <!-- START PRICING TABLES -->
            <div class="pric-tables col-md-8">

                <?php if (count($prices)): ?>
                    <!-- START PRICING TABLES CONTENT -->
                    <div class="tab-content">

                        <?php foreach ($prices as $index => $value) :
                            $class = '';
                            if ($index == 0) {
                                $class = 'in active';
                            }
                            ?>
                            <!-- START PERSONAL PRICING TABLES -->
                            <div role="tabpanel" class="tab-pane fade <?php echo $class; ?>"
                                 id="<?php echo $value['class']; ?>">

                                <?php if (count($value['plans'])): ?>
                                    <?php foreach ($value['plans'] as $planIndex => $plan) :
                                        $dostup = 'times';
                                        if ($plan['dostup']) {
                                            $dostup = 'check';
                                        }
                                        ?>

                                        <!-- PRICE TABLE START -->
                                        <div class="price-table col-md-6">
                                            <div class="item text-center">
                                                <div class="type">
                                                    <h5><?php echo $plan['plan_name']; ?></h5>
                                                </div>
                                                <div class="mount">
                                                    <h3>$<?php echo $plan['pirce']; ?><span>/month</span></h3>
                                                </div>
                                                <div class="pfeat">
                                                    <?php if (count($plan['reapiter_uslug'])) :
                                                        foreach ($plan['reapiter_uslug'] as $usluga) :
                                                            $dostup = 'fa red fa-times';
                                                            if ($usluga['dostup']) {
                                                                $dostup = 'fa green fa-check';
                                                            }
                                                            ?>
                                                            <p>
                                                                <i class="<?php echo $dostup; ?>-circle"></i>
                                                                <?php echo $usluga['name_usluge']; ?>
                                                            </p>
                                                        <?php endforeach; endif; ?>
                                                </div>
                                                <div class="order">
                                                    <a href="<?php echo $plan ['plan_link']; ?>#">
                                                        Purchase Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- PRICE TABLE END -->

                                    <?php endforeach; ?>
                                <?php endif; ?>

                            </div>
                            <!-- END PERSONAL PRICING TABLES -->


                        <?php endforeach; ?>
                    </div>
                    <!-- END PRICING TABLES CONTENT -->

                <?php endif; ?>

            </div>
            <!-- END PRICING TABLES -->


        </div>
    </div>
</section>
<!-- ====== END PRICES ======  -->
