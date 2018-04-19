;

<?php $__env->startSection('main'); ?>
<div id="containerprofile">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#profiili">Profiili</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#omatilmoitukset">Omat ilmoitukset</a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="profiili" class="container tab-pane active"><br>
                <h2>Omat tiedot</h2>
                <h5>Sähköposti: <?php echo e($user->email); ?></h5>
                <h5>Kaupunki: <?php echo e($user->city); ?></h5>
                <hr>
                        <h2>Muokkaa omia tietojasi</h2>
                    <?php echo Form::open(['action' => ['ProfileController@update', $user->id], 'method' => 'POST']); ?>

                        <div class="form-group">
                        <?php echo e(Form::label('email', 'Sähköposti')); ?>

                        <?php echo e(Form::text('email', $user->email, ['class' => 'form-control'])); ?>

                        </div>
                        <div class="form-group">
                        <?php echo e(Form::label('city', 'Kotikaupunki')); ?>

                        <?php echo e(Form::text('city', $user->city, ['class' => 'form-control'])); ?>

                        </div>
                        <?php echo e(Form::hidden('_method','PUT')); ?>

                        <?php echo e(Form::submit('Tallenna muutokset', ['class' => 'btn btn-primary'])); ?>

                    <?php echo Form::close(); ?>

                        <br>
                <hr>
                <form method="get" action="platzform.php">
                    <div class="form-group">
                        <h2>Vaihda salasana</h2>
                        <label>Uusi salasana:</label> 
                        <input type="password" class="form-control" size="30" name="uusisalasana"><br>
                        <label>Vahvista salasana:</label> 
                        <input type="password" class="form-control" size="30" name="vahvistus"><br>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#salasana">Vaihda salasana</button>
                        <input type="reset" class="btn btn-secondary" value="Peruuta">
                        <br>
                    </div>
                </form>
                <hr>
                <form method="get" action="platzform.php">
                    <div class="form-group">
                        <h2>Poista käyttäjä</h2>
                        <button style="margin-bottom: 100px" type="button" class="btn btn-primary" name="submit" data-toggle="modal" data-target="#poistakayttaja">
                            Poista käyttäjä
                        </button>
                        <br>
                    </div>
                </form>
            </div>
            <br>
            <div id="omatilmoitukset" class="container tab-pane fade"><br>
                
                
                            <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                    <?php echo Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']); ?>

                                        <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                                        <?php echo e(Form::submit('Poista ilmoitus', ['class' => 'btn btn-danger'])); ?>

                                    <?php echo Form::close(); ?>

                                </div>
                                </article>
                                <br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>