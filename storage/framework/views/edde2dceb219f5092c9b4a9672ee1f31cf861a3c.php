<?php $__env->startSection('content'); ?>
<div class="jumbotron text-center">
    <h1>Edit</h1>
    <p>This is edit page</p>
    <p></p>
</div>
<a href="/ecommerce" class="btn btn-default">Go Back</a><hr>
<div class="jumbotron">  
    
    <h1>Edit Post</h1>
    <?php echo Form::open(['action' => ['EcommerceController@update', $post->id], 
                                 'method' => 'POST',
                                 'enctype' => 'multipart/form-data']); ?>

        <div class="form-group">
            <?php echo e(Form::label('product_name', 'Product Name')); ?>

            <?php echo e(Form::text('product_name', $post->product_name,['class' => 'form-control', 
                                                'placeholder' => 'product_name'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('price', 'Price')); ?>

            <?php echo e(Form::text('price', $post->price,['class' => 'form-control', 'placeholder' => 'price'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('status', 'Status')); ?>

            <?php echo e(Form::text('status', $post->status,['class' => 'form-control', 'placeholder' => 'status'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::textarea('description', $post->description, [
                'class' => 'form-control ckeditor', 
                'placeholder' => 'Body Text'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::file('cover_image')); ?>

        </div>
        <?php echo e(Form::hidden('_method','PUT')); ?>

        <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>