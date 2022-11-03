
<?php $__env->startSection('container'); ?>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/admin">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/admin/users">Users</a>
                </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            <form action="/admin/users/update" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                <div class="box_general padding_bottom">
                    <div class="header_box version_2">
                        <h2><i class="fa fa-user"></i>User details</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="">
                                <div class="col-md-12 d-flex justify-content-center">
                                    <?php if($user->image != null): ?>
                                        <img class="img-responsive w-50" style="object-fit : cover; height : 178px;"
                                            src="<?php echo e(url('')); ?>/storage/<?php echo e($user->image); ?>" alt="">
                                    <?php else: ?>
                                        <img class="img-responsive" src="<?php echo e(url('')); ?>/admin_assets/img/avatar.jpg"
                                            alt="">
                                    <?php endif; ?>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Photo</label>
                                        <input type="file" name="image" accept="image/*" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Name"
                                            autofocus autocomplete="off" value="<?php echo e($user->name); ?>" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last name</label>
                                        <input type="text" name="last_name" class="form-control" placeholder="Last Name"
                                            autocomplete="off" value="<?php echo e($user->last_name); ?>">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" autocomplete="off"
                                            value="<?php echo e($user->username); ?>" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" autocomplete="off"
                                            value="<?php echo e($user->email); ?>" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="phone" name="phone" class="form-control"
                                            value="<?php echo e($user->phone); ?>" autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Level</label>
                                        <select name="rule" class="form-control" id="rule">
                                            <option value="1" <?php echo e($user->rule_id == 1 ? 'selected' : ''); ?>>Admin
                                            </option>
                                            <option value="3" <?php echo e($user->rule_id == 3 ? 'selected' : ''); ?>>User
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                            
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn_1 medium">Save</button>
                </div>
            </form>
        </div>
        <!-- /.container-fluid-->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Documents\GitHub\grahaoffice\resources\views/admin/users/edit.blade.php ENDPATH**/ ?>