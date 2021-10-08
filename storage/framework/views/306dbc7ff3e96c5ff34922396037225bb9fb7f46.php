<?php $__env->startSection('content'); ?>
    <div class="jumbotron text-center">
        <h1>Create</h1>
        <p>This is create page</p>
        <p></p>
    </div>    
    <a href="/ecommerce" class="btn btn-default">Go Back</a><hr>
    <div class="jumbotron">         
        <h1>Create Product</h1>
    <?php echo Form::open(['action' => 'EcommerceController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

        <div class="form-group">
            <?php echo e(Form::label('product_name', 'Product name')); ?>

            <?php echo e(Form::text('product_name', '',['class' => 'form-control', 'placeholder' => 'Product name'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('price', 'Price')); ?>

            <?php echo e(Form::text('price', '',['class' => 'form-control', 'placeholder' => 'Price'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('status', 'Status')); ?>

            <?php echo e(Form::text('status', '',['class' => 'form-control', 'placeholder' => 'Status'])); ?>

        </div>
        <div class="form-group">            
            <?php echo e(Form::textarea('description', '',['class' => 'form-control ckeditor', 'placeholder' => 'Product Description'])); ?>

        </div>
        <div class="form-group">
                <?php echo e(Form::file('cover_image')); ?>

        </div>
        <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>