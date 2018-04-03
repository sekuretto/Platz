;

<?php $__env->startSection('main'); ?>
<div class="container">
    <h3>Kaikki ilmoitukset</h3>
    <hr>
    <?php if(count($posts) >= 1): ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
            <article>
            <h3 class="subinfo"><?php echo e($post->category); ?> - <?php echo e($post->title); ?> | <?php echo e($post->user->name); ?> - <?php echo e($post->created_at); ?></h3>
            <p class="box"><?php echo e($post->body); ?></p>
            </article>
    
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <p>NO POSTS</p>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>