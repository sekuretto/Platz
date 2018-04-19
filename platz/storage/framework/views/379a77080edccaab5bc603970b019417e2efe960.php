;

<?php $__env->startSection('main'); ?>
<div class="container">
    <h3>Pysyväislinkki: <b><?php echo e($post->title); ?></b></h3>
    <hr>
    <article>
            <h3 class="subinfo"><b><?php echo e($post->category); ?></b> - <?php echo e($post->title); ?> | <b>Lisätty:</b> <?php echo e($post->user->name); ?> - <?php echo e($post->created_at); ?></h3>
            <hr>
            <p><?php echo e($post->body); ?><br></p>
                <?php if($post->image == 'noimage.png'): ?>
                    <img class="img-fluid articleimg" src="/storage/noimage.png" alt="kuva"><br>
                <?php else: ?>
                    <img class="img-fluid articleimg" src="/storage/<?php echo e($post->user->name); ?>/<?php echo e($post->image); ?>" alt="kuva"><br>
                <?php endif; ?>
                <p><b>Sähköposti: <?php echo e($post->user->email); ?></b><br></p>
                <p><b>Kotikaupunki: <?php echo e($post->user->city); ?></b></p> 
                <a href="#" data-toggle="modal" data-target="#<?php echo e($post->id); ?>" style="cursor:pointer;text-decoration:underline; display: inline">Ilmianna ilmoitus</a>      
    </article>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>