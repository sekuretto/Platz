;

<?php $__env->startSection('main'); ?>
<div class="container">
    <h3>Kaikki ilmoitukset</h3>
    <hr>
    <?php if(count($posts) >= 1): ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
            <article>
            <h3 class="subinfo"><b><?php echo e($post->category); ?></b> - <?php echo e($post->title); ?> | <b>Lisätty:</b> <?php echo e($post->user->name); ?> - <?php echo e($post->created_at); ?></h3>
            <hr>
            <div class="box"><?php echo e($post->body); ?><br>
                <?php if($post->image == 'noimage.png'): ?>
                    <img class="img-fluid articleimg" src="/storage/noimage.png" alt="kuva"><br>
                <?php else: ?>
                    <img class="img-fluid articleimg" src="/storage/<?php echo e($post->user->name); ?>/<?php echo e($post->image); ?>" alt="kuva"><br>
                <?php endif; ?>
                <p><b>Sähköposti: <?php echo e($post->user->email); ?></b><br></p>
                <p><b>Kotikaupunki: <?php echo e($post->user->city); ?></b></p>  
            </div>
            </article>
            <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <p>NO POSTS</p>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('nav'); ?>
<div class="menu" id="myTopnav">
        <a href="/myynti" class="btn btn-secondary">Myy</a>
        <a href="/osto" class="btn btn-secondary">Osta</a>
        <a href="/vaihto" type="button" class="btn btn-secondary">Vaihda</a>
        <?php echo Form::open(['action' => 'PagesController@haku', 'method' => 'POST']); ?>


                <?php echo e(Form::text('haku', '', ['class' => 'form-control'])); ?>


                <?php echo e(Form::submit('Hae kaikista ilmoituksista', ['class' => 'btn btn-primary'])); ?>

                
        <?php echo Form::close(); ?>


</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>