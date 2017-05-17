<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <p class="quote">The beautiful Laravel</p>
        </div>
    </div>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title"><?php echo e($post['title']); ?></h1>
            <p><?php echo e($post['content']); ?>!</p>
            <p><a href="<?php echo e(route('blog.post', ['id' => array_search($post, $posts)])); ?>">Read more...</a></p>
        </div>
    </div>
    <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>