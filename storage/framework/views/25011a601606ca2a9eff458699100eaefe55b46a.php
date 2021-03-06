<?php $__env->startSection('content'); ?>
<div class="jumbotron">
    <h1>Edit Post</h1>
    <?php echo Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST','enctype' => 'multipart/form-data']); ?>

        <div class="form-group">
            <?php echo e(Form::label('title', 'Title')); ?>

            <?php echo e(Form::text('title', $post->title,['class' => 'form-control', 'placeholder' => 'Title'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('body', 'Body')); ?>

            <!--Default                
            <?php echo e(Form::textarea('body', '',['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])); ?>

            -->
            <!-- USING CKEDITOR Jquery -->
            <?php echo e(Form::textarea('body', $post->body, ['class' => 'form-control ckeditor', 'placeholder' => 'Body Text'])); ?>

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