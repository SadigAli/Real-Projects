<?php $__env->startSection('content'); ?>
    <?php if(Session::has('success_message')): ?>
        <div class="toast" role="alert" style="opacity: 1; width: 100%" aria-live="assertive" aria-atomic="true">
            <div class="toast-body">
                <?php echo Session('success_message'); ?>

                <button type="button" class="ml-2 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    <?php endif; ?>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-between">
                    <h3 class="card-title ml-3">Sosial Projects</h3>
                    <a href="<?php echo e(route('create-project')); ?>" class="btn btn-success mr-3">Create</a>
                </div>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Settings</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th><?php echo e($project->id); ?></th>
                                    <td><?php echo e($project->{'title_' . App::getLocale()}); ?></td>
                                    <td>
                                        <?php if(Str::length($project->{'description_' . App::getLocale()})>50): ?>
                                            <?php echo e(Str::substr($project->{'description_' . App::getLocale()},0,50)); ?>...
                                            <?php else: ?>
                                            <?php echo e($project->{'description_' . App::getLocale()}); ?>

                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo e(asset('storage/images/projects') . '/' . $project->image); ?>"
                                            alt="img">
                                    </td>
                                    <td>
                                        <a href="/admin-user/project/edit/<?php echo e($project->id); ?>"
                                            class="btn btn-primary mr-2"><i class="mdi mdi-table-edit"></i></a>
                                        <a href="/admin-user/project/delete/<?php echo e($project->id); ?>"
                                            class="btn btn-danger mx-2"><i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nant\resources\views/admin/projects/index.blade.php ENDPATH**/ ?>