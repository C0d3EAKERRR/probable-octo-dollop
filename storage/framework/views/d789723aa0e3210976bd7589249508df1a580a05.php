<?php $__env->startSection('content'); ?>
    <div class="jumbotron text-center">
        <h1>Product page</h1>
        <p>This is show page</p>
        <p></p>
    </div>  
    <a href="/ecommerce" class="btn btn-default">Go Back</a><hr>
    <div class="jumbotron">        
        <hr>
        <?php if(!Auth::guest()): ?>
            <?php if(Auth::user()->id == $post->user_id): ?>
                <a href="/ecommerce/<?php echo e($post->id); ?>/edit" class="btn btn-success btn-lg float-left">Edit</a>                
                <?php echo Form::open(['action' => ['EcommerceController@destroy', $post->id], 'method' => 'POST','class' => 'pull-right']); ?>                
                    <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                    <?php echo e(Form::submit('Delete', ['class' => 'btn btn-success btn-lg float-left'])); ?>                 
                <?php echo Form::close(); ?>

            <?php endif; ?>
        <?php endif; ?>    
        <hr>
        <h3>Product ID: <?php echo e($post->id); ?></h2><hr>
        <h3>Product Name: <?php echo e($post->product_name); ?></h1><hr>
    
        <img style="width:100%" src="/storage/cover_images/<?php echo e($post->cover_image); ?>">
        <br><br>
    
        <h3>Product Description:<br><br><?php echo $post->description; ?></h3><hr>
        <h3>Price: <?php echo e($post->price); ?></h3><hr>
        <h3>Inventory Stats: <?php echo e($post->status); ?></h3><hr>      
        <small>Product Creation @ <?php echo e($post->created_at); ?></small>
     </div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>