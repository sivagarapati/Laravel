<?php $__env->startSection('content'); ?>
<!-- <div class="row">
<div class="col-md-12">
    <h1>Hello World!</h1>
     <?php if(true): ?>
        <p>only displays if true</p>
    <?php else: ?>
        <p>only displays if flase</p>
    <?php endif; ?>
    <hr>
    <?php for($i=0;$i<5;$i++): ?>
    <p><?php echo e($i +1); ?>.Iteration</p>
    <?php endfor; ?>
    <hr>
    <h2>XSS</h2>
    <?php echo e("<script>alert('Hello')</script>"); ?>

    <?php echo "<script>alert('Hello')</script>"; ?>  
</div>
</div> -->
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
    



    <!-- replace the static content with dynamic content  
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Learning Laravel</h1>
            <p>This blog post will get you right on track with Laravel!</p>
            <p><a href="<?php echo e(route('blog.post',['id'=>1])); ?>">Read more...</a></p>
        </div>
    </div>
    <hr>
    
    
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">The next Steps</h1>
            <p>Understanding the Basics is great, but you need to be able to make the next steps.</p>
            <p><a href="<?php echo e(route('blog.post',['id'=>2])); ?>">Read more...</a></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Laravel 5.3</h1>
            <p>Though announced as a "minor release", Laravel 5.3 ships with somer very interesting additions and features.</p>
            <p><a href="<?php echo e(route('blog.post',['id'=>3])); ?>">Read more...</a></p>
        </div>
    </div>  -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>