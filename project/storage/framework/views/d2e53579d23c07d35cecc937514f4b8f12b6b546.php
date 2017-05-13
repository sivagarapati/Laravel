<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col-md-12">
<a href="<?php echo e(route('admin.create')); ?>" class="btn btn-success">New Post</a>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-12">
<p><strong>Learning Laravel</strong><a href="<?php echo e(route('admin.edit',['id'=>1])); ?>">Edit</a></p>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>