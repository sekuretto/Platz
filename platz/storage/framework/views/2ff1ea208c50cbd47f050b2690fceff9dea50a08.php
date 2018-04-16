;

<?php $__env->startSection('main'); ?>
<div class="container">
    <h3>Ilmoitukset: Vaihdetaan</h3>
    <hr>
    <?php if(count($posts) >= 1): ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
            <article>
            <h3 class="subinfo"><b><?php echo e($post->category); ?></b> - <?php echo e($post->title); ?> | <b>Lisätty:</b> <?php echo e($post->user->name); ?> - <?php echo e($post->created_at); ?></h3>
            <p class="box"><?php echo e($post->body); ?><br>
            <b>Sähköposti: <?php echo e($post->user->email); ?></b><br>
            <b>Kotikaupunki: <?php echo e($post->user->city); ?></b><br>
            <img class="img-fluid" src="/storage/<?php echo e($post->user->name); ?>/<?php echo e($post->image); ?>" alt="kuva">
            </p>
            
            </article>
            <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <p>NO POSTS</p>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>