
<?php $__env->startSection('container'); ?>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/admin">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/admin/rooms">Rooms</a>
                </li>
                <li class="breadcrumb-item active">Add</li>
            </ol>
            <form action="/admin/rooms/store" enctype="multipart/form-data" method="POST">
                <?php echo csrf_field(); ?>
                <div class="box_general padding_bottom">
                    <div class="header_box version_2">
                        <h2><i class="fa fa-file"></i>Basic info</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Room Title</label>
                                <input type="text" class="form-control" name="name" placeholder="Meeting Room"
                                    autofocus required>
                            </div>

                            <div class="form-group">
                                <label>Ammount</label>
                                <input type="text" class="form-control" name="ammount" required>
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" class="form-control" name="price" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description" cols="30" rows="10" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Service</label>
                                <div class="styled-select">
                                    <select name="service">
                                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($service->id); ?>"><?php echo e($service->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Type</label>
                                <div class="styled-select">
                                    <select name="roomtype">
                                        <?php $__currentLoopData = $roomtype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($type->id); ?>"><?php echo e($type->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Facilities</label>
                                <input type="text" class="form-control" name="facilities" id="" placeholder="ex. Wifi,LCD,TV" required>
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image" accept="image/*" required>
                            </div>
                        </div>
                    </div>

                    <!-- /row-->
                    
                    <!-- /row-->
                    
                </div>
                <!-- /box_general-->

                
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn_1 medium">Save</button>
                </div>
            </form>
        </div>

        <!-- /.container-fluid-->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Documents\GitHub\grahaoffice\resources\views/admin/rooms/create.blade.php ENDPATH**/ ?>