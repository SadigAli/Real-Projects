<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Teacher</h4>
                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="name_az" placeholder="Name"
                                value="<?php echo e($teacher->name_az); ?>" />
                            <?php $__errorArgs = ['name_az'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger my-3"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Lastname</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="lastname_az"
                                placeholder="Lastname" value="<?php echo e($teacher->lastname_az); ?>" />
                            <?php $__errorArgs = ['lastname_az'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger my-3"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Profession</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="profession_az" placeholder="Profession"
                                value="<?php echo e($teacher->profession_az); ?>" />
                            <?php $__errorArgs = ['profession_az'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger my-3"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Name EN</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="name_en" placeholder="Name"
                                value="<?php echo e($teacher->name_en); ?>" />
                            <?php $__errorArgs = ['name_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger my-3"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Lastname EN</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="lastname_en"
                                placeholder="Lastname" value="<?php echo e($teacher->lastname_en); ?>" />
                            <?php $__errorArgs = ['lastname_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger my-3"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Profession EN</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="profession_en" placeholder="Profession"
                                value="<?php echo e($teacher->profession_en); ?>" />
                            <?php $__errorArgs = ['profession_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger my-3"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Name RU</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="name_ru" placeholder="Name"
                                value="<?php echo e($teacher->name_ru); ?>" />
                            <?php $__errorArgs = ['name_ru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger my-3"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Lastname RU</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="lastname_ru"
                                placeholder="Lastname" value="<?php echo e($teacher->lastname_ru); ?>" />
                            <?php $__errorArgs = ['lastname_ru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger my-3"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Profession RU</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="profession_ru" placeholder="Profession"
                                value="<?php echo e($teacher->profession_ru); ?>" />
                            <?php $__errorArgs = ['profession_ru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger my-3"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Facebook Link</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="facebook" placeholder="Facebook Link"
                                value="<?php echo e($teacher->facebook); ?>" />
                        </div>
                        <div class="form-group">
                            <label for="">Twitter Link</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="twitter" placeholder="Twitter Link"
                                value="<?php echo e($teacher->twitter); ?>" />
                        </div>
                        <div class="form-group">
                            <label for="">Instagram Link</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="instagram" placeholder="Instagram Link"
                                value="<?php echo e($teacher->instagram); ?>" />
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="file-upload-default" accept="image/*" />
                            <div class="input-group col-sm-12" style="height: 30px;">
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="Upload Image" />
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                                </span>
                            </div>
                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger my-3"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="row">
                            <div class="placeholder mr-5">
                                <div class="upload-file">+</div>
                            </div>
                            <img src="<?php echo e(asset('storage/images/teachers/' . $teacher->image)); ?>" width="200" height="250"
                                alt="" style="margin-top: 20px;">
                        </div>
                        <button type="submit" class="btn btn-success mr-2"> Edit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITAC\resources\views/admin/teachers/edit.blade.php ENDPATH**/ ?>