<?php $__env->startSection('content'); ?>
    <div class="jumbotron text-center">
        <h1>C0d3reakerr => DevTEST</h1>
        <p>This is Laravel Web Application made from scratch! Developed by: C0d3reakerr</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>


    <div class="jumbotron text-center">
        <?php $__env->startSection('content'); ?>
            <h1>Posts</h1>
            <?php if(count($posts) > 0): ?>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="well">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <img style="width:100%" src="/storage/cover_images/<?php echo e($post->cover_image); ?>">
                            </div>                
                            <div class="col-md-8 col-sm-8">
                                <h3><a href="/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h3>
                                <small>Written on <?php echo e($post->created_at); ?> by <?php echo e($post->user->name); ?></small>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($posts->links()); ?>

            <?php else: ?>
                <p>No posts found</p>
            <?php endif; ?>
        <?php $__env->stopSection(); ?>
    </div>
<?php $__env->stopSection(); ?>


   
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>