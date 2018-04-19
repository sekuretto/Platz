<?php $__env->startSection('main'); ?>
<div class="container">
    <?php if($foo == 1): ?>
    <h3>Myynti</h3>
    <?php elseif($foo == 2): ?>
    <h3>Osto</h3>
    <?php elseif($foo == 3): ?>
    <h3>Vaihto</h3>
    <?php elseif($foo == 4): ?>
    <h3>Tulokset haulla <b><?php echo e($haku); ?></b></h3>
    <?php elseif($foo == 5): ?>
    <h3>Kaikki ilmoitukset</h3>
    <?php endif; ?>
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
                <a href="#" data-toggle="modal" data-target="#<?php echo e($post->id); ?>" style="cursor:pointer;text-decoration:underline; display: inline">Ilmianna ilmoitus</a>
                <a href="/posts/<?php echo e($post->id); ?>" style="cursor:pointer;text-decoration:underline; display: inline">Pysyväislinkki</a>
            </div>
            </article>
            <br>
    <div class="modal" id="<?php echo e($post->id); ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Ilmianna ilmoitus: <?php echo e($post->title); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <?php echo Form::open(['action' => 'PagesController@report', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>


                            <div class="form-group">
                                <?php echo e(Form::label('reason', 'Valitse ilmiannon tyyppi')); ?>

                <?php echo e(Form::select('reason', ['Valitse' => 'Valitse', 'Laiton' => 'Laiton', 'Sopimaton' => 'Sopimaton', 'Vilpillinen' => 'Vilpillinen', 'Muu syy' => 'Muu syy'])); ?>

                            </div>
                            <div class="form-group">
                                <?php echo e(Form::label('body', 'Lisätietoja')); ?>

                                <?php echo e(Form::textarea('body', '', ['class' => 'form-control'])); ?>

                                <?php echo e(Form::textarea('id', $post->id, ['style' => 'display:none'])); ?>

                                <?php echo e(Form::textarea('title', $post->title, ['style' => 'display:none'])); ?>

                                <?php echo e(Form::textarea('postBody', $post->body, ['style' => 'display:none'])); ?>

                            </div>
                  

              </div>
              <div class="modal-footer">
                  <?php echo e(Form::submit('Lähetä ilmianto', ['class' => 'btn btn-primary'])); ?>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Peruuta</button>
              </div>
                <?php echo Form::close(); ?>

            </div>
      </div>
</div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <p>NO POSTS</p>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('nav'); ?>
<div class="menu" id="myTopnav">
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        <a style="display:block; visibility:hidden;">Menu</a>
        <a href="/myynti" class="btn btn-secondary">Myy</a>
        <a href="/osto" class="btn btn-secondary">Osta</a>
        <a href="/vaihto" type="button" class="btn btn-secondary">Vaihda</a>
        <a>
            <?php echo Form::open(['action' => 'PagesController@haku', 'method' => 'POST']); ?>
<<<<<<< HEAD
=======

>>>>>>> 1ef993f447b4bf0a7527b58e49c824945ae43a2b

                    <?php echo e(Form::text('haku', '', ['class' => 'form-control', 'style'=>'display:inline;width:75%;'])); ?>

<<<<<<< HEAD
                    <?php echo e(Form::text('haku', '', ['class' => 'form-control', 'style'=>'display:inline;width:75%;'])); ?>
=======
>>>>>>> 1ef993f447b4bf0a7527b58e49c824945ae43a2b

                    <?php echo e(Form::image('images/search-icon.png', '', ['style'=>'width:30px;display:inline;margin-top:5px;'])); ?>

<<<<<<< HEAD
                    <?php echo e(Form::image('images/search-icon.png', '', ['style'=>'width:30px;display:inline;margin-top:5px;'])); ?>
=======
>>>>>>> 1ef993f447b4bf0a7527b58e49c824945ae43a2b


            <?php echo Form::close(); ?>

<<<<<<< HEAD
            <?php echo Form::close(); ?>

=======
>>>>>>> 1ef993f447b4bf0a7527b58e49c824945ae43a2b
        
          
        </a>
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>