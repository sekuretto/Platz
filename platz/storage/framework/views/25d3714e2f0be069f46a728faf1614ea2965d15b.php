;

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
                <a data-toggle="modal" data-target="#ilmianna">Ilmianna ilmoitus</a>
            </div>
            </article>
            <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <p>NO POSTS</p>
    <?php endif; ?>
    <div class="modal" id="ilmianna" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ilmianna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form>
                    <div class="form-group col-md-6">
                        <label for="inputState">Valitse ilmiannon tyyppi</label>
                        <select id="inputState" class="form-control">
                            <option selected>Valitse vaihtoehdoista</option>
                            <option>Laiton</option>
                            <option>Sopimaton</option>
                            <option>Vilpillinen</option>
                            <option>Muu syy</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Lisätietoja"></textarea>
                    </div>
            </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Lisää ilmoitus</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Peruuta</button>
      </div>
    </div>
  </div>
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