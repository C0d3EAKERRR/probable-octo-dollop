<?php $__env->startSection('content'); ?>
    <div class="jumbotron text-center">
        <h1>Welcome to my shop!</h1>            
        <hr><br>
        <div>
                <h3>New products available Shop Now!</h3>
                <hr><a href="/ecommerce/create" class="btn btn-primary">Create Product</a>
            <hr>
        </div>
        <?php if(count($posts) > 0): ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="well">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <img style="width:100%" src="/storage/cover_images/<?php echo e($Product->cover_image); ?>">
                    </div>                
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/ecommerce/<?php echo e($Product->id); ?>"><?php echo e($Product->product_name); ?></a></h3>
                        <small>Product posted on <?php echo e($Product->created_at); ?></small>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($posts->links()); ?>

        <?php else: ?>
            <p><h5>No products found! Please create..</h5></p>
        <?php endif; ?>
    </div>  
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>