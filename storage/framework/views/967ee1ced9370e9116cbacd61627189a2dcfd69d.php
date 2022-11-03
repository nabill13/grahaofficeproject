
<?php $__env->startSection('container'); ?>
    <main>
        <section class="hero_single version_2">
            <div class="wrapper">
                <div class="container">
                    <h3>Book Meeting Rooms</h3>
                    <p>Use Meeting Room as you like and anytime you need</p>
                </div>
            </div>
        </section>
        <!-- /hero_single -->

        <div class="container container-custom margin_80_0">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Our Meeting Rooms</h2>
                <p>Get your vibe</p>
            </div>
            <div id="reccomended" class="owl-carousel owl-theme">
                <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                        <div class="box_grid">
                            <figure>
                                <a href="/rooms/<?php echo e($room->id); ?>"><img src="storage/<?php echo e($room->image); ?>"
                                        class="img-fluid" alt="" width="800" height="533">
                                    <div class="read_more"><span>Read more</span></div>
                                </a>
                                <small>Meeting Room</small>
                            </figure>
                            <div class="wrapper">
                                <h3><a href="tour-detail.html"><?php echo e($room->name); ?></a></h3>
                                <p>Type Room : <?php echo e($room->type->name); ?><br>
                                    Ammount : <?php echo e($room->ammount); ?> person </p>
                                <span class="price"><strong><?php echo e($room->price_rp()); ?></strong></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- /carousel -->
            <p class="btn_home_align"><a href="/rooms" class="btn_1 rounded">View all Rooms</a></p>
            <hr class="large">
        </div>
        <!-- /container -->

        <div class="container container-custom margin_30_95">
            <section class="add_bottom_45">
                <div class="main_title_3">
                    <span><em></em></span>
                    <h2>Our Facility</h2>
                </div>
                <div class="row">
					<div class="col-lg-6">
						<ul class="bullets">
							<li>Table & Chair</li>
							<li>Air Conditioner</li>
							<li>Wifi</li>
							<li>TV LCD</li>
						</ul>
					</div>
					<div class="col-lg-6">
						<ul class="bullets">
							<li>Flipchart</li>
							<li>Sound System</li>
							<li>Microphone</li>
							<li>Snack & Drink</li>
						</ul>
					</div>
				</div>
            </section>
            <!-- /section -->
            <hr class="large">
        </div>
        <!-- /container -->


        <div class="call_section">
            <div class="container clearfix">
                <div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
                    <div class="block-reveal">
                        <div class="block-vertical"></div>
                        <div class="box_1">
                            <h3>Enjoy your Meeting with us</h3>
                            <p>Book the perfect room for your meeting</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/call_section-->
    </main>
    <!-- /main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customers.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Documents\GitHub\grahaoffice\resources\views/customers/index.blade.php ENDPATH**/ ?>