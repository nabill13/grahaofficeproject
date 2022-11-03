
<?php $__env->startSection('container'); ?>
    <main>
        <div class="hero_in cart_section">
            <div class="wrapper">
                <div class="container">
                    <div class="bs-wizard clearfix">
                        <h1 class="fadeInUp"><span></span>History</h1>
                    </div>
                    <!-- End bs-wizard -->
                </div>
            </div>
        </div>
        <!--/hero_in-->

        <div class="bg_color_1">
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box_cart">
                            <table class="table table-striped cart-list">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Price</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="thumb_cart">
                                                        <img src="<?php echo e(url('')); ?>/storage/<?php echo e($item->room->image); ?>"
                                                            alt="Image">
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <span class="item_cart my-0"><?php echo e($item->room->name); ?></span>
                                                            <?php
                                                                $text = '';
                                                                $bg = '';

                                                                if ($item->payment->status == 0){
                                                                    $text = 'Pending';
                                                                    $bg = 'bg-warning';                                                                
                                                                }else if ($item->payment->status == 1){
                                                                    $text = 'Approved';
                                                                    $bg = 'bg-success';  
                                                                }else if ($item->payment->status == 2){
                                                                    $text = 'Cancelled';
                                                                    $bg = 'bg-danger';  
                                                                }
                                                            ?>
                                                            <div class="badge <?php echo e($bg); ?>"><?php echo e($text); ?></div> <br>
                                                            <span class="item_cart my-0 small"
                                                                style="color: rgb(177, 177, 177)"><?php echo e(date_create($item->created_at)->format('d-m-Y H:i')); ?></span>
                                                            <br>
                                                            <span class="item_cart my-0" style="color: rgb(87, 87, 87)">Start Date : <?php echo e(date_create($item->datetime_in)->format('d-m-Y H:i')); ?></span> <br>
                                                            <span class="item_cart my-0" style="color: rgb(87, 87, 87)">End Date : <?php echo e(date_create($item->datetime_out)->format('d-m-Y H:i')); ?></span> <br>
                                                            <span class="item_cart my-0" style="color: rgb(87, 87, 87)">Guests : <?php echo e($item->guest); ?></span> <br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <strong><?php echo e($item->payment->total_rp()); ?></strong>
                                            </td>

                                            <td class="options" style="width:5%; text-align:center;">
                                                <?php if($item->payment->status == 1): ?>
                                                    <a href="/history/invoice/<?php echo e($item->id); ?>" title="Print Invoice"><i
                                                            class="text-success icon-print"></i></a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <!-- /cart-options -->
                        </div>
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customers.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Documents\GitHub\grahaoffice\resources\views/customers/history/index.blade.php ENDPATH**/ ?>