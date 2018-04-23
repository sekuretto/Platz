<?php $__env->startSection('main'); ?>
<div class="container">
    <h3>Ilmoitus: <b><?php echo e($post->title); ?></b></h3>
    <hr>
    <article style="margin-bottom: 100px">
            <h3 class="subinfo"><b><?php echo e($post->category); ?></b> - <?php echo e($post->title); ?> | <b>Lisätty:</b> <a href="../profiles/<?php echo e($post->user->id); ?>" style="color:#ff794c;"><?php echo e($post->user->name); ?></a> - <?php echo e($post->created_at); ?></h3>
            <hr>
            <p><?php echo e($post->body); ?><br></p>
                <?php if($post->image == 'noimage.png'): ?>
                    <img class="img-fluid articleimg" src="/storage/noimage.png" alt="kuva"><br>
                <?php else: ?>
                    <img class="img-fluid articleimg" src="/storage/<?php echo e($post->user->name); ?>/<?php echo e($post->image); ?>" alt="kuva"><br>
                <?php endif; ?>
                <p><b>Sähköposti: <?php echo e($post->user->email); ?></b><br></p>
                <p><b>Kotikaupunki: <?php echo e($post->user->city); ?></b></p> 
                <a href="#" data-toggle="modal" data-target="#<?php echo e($post->id); ?>" style="cursor:pointer;text-decoration:underline; display: inline;color:#ff794c;" >Ilmianna ilmoitus</a>      
    </article>
</div>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>