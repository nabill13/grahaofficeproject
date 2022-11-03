
<?php $__env->startSection('container'); ?>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/admin">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Users</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center text-primary font-weight-bold">User Data</div>
                        <div>
                            <a href="/admin/users/add" class="btn btn-success"><i class="bi bi-plus"></i> New</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Level</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($user->name); ?></td>
                                        <td><?php echo e($user->username . ' ' . $user->last_name); ?></td>
                                        <td><?php echo e($user->email); ?></td>
                                        <td class="text-center"><?php echo e($user->rule->level); ?></td>
                                        <td class="text-center">
                                            <a href="/admin/users/edit/<?php echo e($user->id); ?>" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                             <?php if(!isset($user->order->id) && $user->id != auth()->user()->id): ?>
                                                <a href="/admin/users/remove/<?php echo e($user->id); ?>" onclick="return confirm('Are you sure you want to delete this data?')" class="btn btn-sm btn-danger" title="Remove"><i
                                                        class="bi bi-trash-fill"></i></a>
                                            <?php endif; ?>
                                        </td> 
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
            <!-- /tables-->
        </div>
        <!-- /container-fluid-->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Documents\GitHub\grahaoffice\resources\views/admin/users/index.blade.php ENDPATH**/ ?>