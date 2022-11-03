
<?php $__env->startSection('container'); ?>
    <main>
        <div class="hero_in cart_section">
            <div class="wrapper">
                <div class="container">
                    <div class="bs-wizard clearfix d-flex justify-content-center">
                        <div class="bs-wizard-step active">
                            <div class="text-center bs-wizard-stepnum">Payment</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <span class="bs-wizard-dot"></span>
                        </div>

                        <div class="bs-wizard-step disabled">
                            <div class="text-center bs-wizard-stepnum">Finish!</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <span class="bs-wizard-dot"></span>
                        </div>
                    </div>
                    <!-- End bs-wizard -->
                </div>
            </div>
        </div>
        <!--/hero_in-->

        <div class="bg_color_1">
            <div class="container margin_60_35">
                <form action="/purchase/finish" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="room_id" value="<?php echo e($room_id); ?>">
                    <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                    <input type="hidden" name="date_in" value="<?php echo e($date_in->format('Y-m-d H:i:s')); ?>">
                    <input type="hidden" name="date_out" value="<?php echo e($date_out->format('Y-m-d H:i:s')); ?>">
                    <input type="hidden" name="total" value="<?php echo e($total); ?>">
                    <input type="hidden" name="guest" value="<?php echo e($qty); ?>">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="box_cart">
                                <div class="form_title">
                                    <h3><strong>1</strong>Your Details</h3>
                                </div>
                                <div class="step">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>First name</label>
                                                <input type="text" class="form-control" id="firstname_booking"
                                                    name="firstname_booking" value="<?php echo e($user->name); ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Last name</label>
                                                <input type="text" class="form-control" id="lastname_booking"
                                                    name="lastname_booking" value="<?php echo e($user->last_name); ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" id="email_booking" name="email_booking"
                                                    class="form-control" value="<?php echo e($user->email); ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Telephone</label>
                                                <input type="text" id="telephone_booking" name="telephone_booking"
                                                    class="form-control" value="<?php echo e($user->phone); ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <!--End step -->

                                <div class="form_title">
                                    <h3><strong>2</strong>Payment Information</h3>
                                </div>
                                <div class="step">
                                    <div class="form-group">
                                        <label>Payment Type</label>
                                        <select name="paytype" class="form-control" id="paytype">
                                            <?php $__currentLoopData = $paytype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($pt->id); ?>"><?php echo e($pt->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <!--End row -->
                                </div>
                                <hr>
                                <!--End step -->
                            </div>
                        </div>
                        <!-- /col -->

                        <aside class="col-lg-4" id="sidebar">
                            <div class="box_detail">
                                <div id="total_cart">
                                    Total <span class="float-right"><?php echo e($total_rp); ?></span>
                                </div>
                                <ul class="cart_details">
                                    <li>From <span><?php echo e($date_in->format('d-m-Y H:i')); ?></span></li>
                                    <li>To <span><?php echo e($date_out->format('d-m-Y H:i')); ?></span></li>
                                    <li>Guests <span><?php echo e($qty); ?></span></li>
                                </ul>
                                <button type="submit" class="btn_1 full-width purchase">Purchase</button>
                                

                            </div>
                        </aside>
                    </div>
                    <!-- /row -->
                </form>
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customers.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Documents\GitHub\grahaoffice\resources\views/customers/purchase/index.blade.php ENDPATH**/ ?>