

<?php $__env->startSection('container'); ?>
    <main>

        <section class="hero_in tours">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>MEETING ROOM</h1>
                </div>
            </div>
        </section>
        <div class="container margin_60_35">
        <!--/hero_in-->
        <hr class="large">
            <div class="isotope-wrapper">
                <div class="row">
                    <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 isotope-item latest">
                            <div class="box_grid">
                                <figure>
                                    
                                    <a href="/rooms/<?php echo e($room->id); ?>"><img src="storage/<?php echo e($room->image); ?>"
                                            class="img-fluid" alt="" width="800" height="533">
                                        <div class="read_more"><span>Read more</span></div>
                                    </a>
                                    <small>Meeting Room</small>
                                </figure>
                                <div class="wrapper">
                                    <h3><a href="/rooms/<?php echo e($room->id); ?>"><?php echo e($room->name); ?></a></h3>
                                    <p>Type Room : <?php echo e($room->type->name); ?><br>
                                        Ammount : <?php echo e($room->ammount); ?> person </p>
                                    <span class="price"><strong><?php echo e($room->price_rp()); ?></strong></span>
                                    <hr class="my-2 mx-0">
                                    <div class="d-flex justify-content-end mt-3 mb-0">
                                        <a href="/rooms/<?php echo e($room->id); ?>" class="m-0"><strong>BOOK NOW</strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <!-- /row -->
            </div>
            <!-- /isotope-wrapper -->

            

        </div>
        <!-- /container -->

        <div class="bg_color_1">
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-md-4">
                        <a href="#0" class="boxed_list">
                            <i class="pe-7s-help2"></i>
                            <h4>Need Help? Contact us</h4>
                            <p>We ready to help you when get toubled in our website</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#0" class="boxed_list">
                            <i class="pe-7s-wallet"></i>
                            <h4>Payments</h4>
                            <p>Our mission is to provide a platform that is easy affordable and safe to pay for booking
                                meeting rooms.</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#0" class="boxed_list">
                            <i class="pe-7s-note2"></i>
                            <h4>Cancel Policy</h4>
                            <p>You can cancel the booking in 24hours after payment</p>
                        </a>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->

    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customers.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Documents\GitHub\grahaoffice\resources\views/customers/rooms/index.blade.php ENDPATH**/ ?>