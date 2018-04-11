;

<?php $__env->startSection('main'); ?>
<div id="container">
        <div class="tab-content">
            <div id="profiili" class="container tab-pane active"><br>
                <h2>Omat tiedot</h2>
                <h5>Sähköposti: <?php echo e(Auth::user()->email); ?></h5>
                <h5>Kaupunki: <?php echo e(Auth::user()->city); ?></h5>
                <hr>
                        <h2>Muokkaa omia tietojasi</h2>
                    <?php echo Form::open(['action' => ['PostsController@update', Auth::user()->id], 'method' => 'POST']); ?>

                        <div class="form-group">
                        <?php echo e(Form::label('email', 'Sähköposti')); ?>

                        <?php echo e(Form::text('email', Auth::user()->email, ['class' => 'form-control'])); ?>

                        </div>
                        <div class="form-group">
                        <?php echo e(Form::label('city', 'Kotikaupunki')); ?>

                        <?php echo e(Form::text('city', Auth::user()->city, ['class' => 'form-control'])); ?>

                        </div>
                        <?php echo e(Form::hidden('_method','PUT')); ?>

                        <?php echo e(Form::submit('Lähetä', ['class' => 'btn btn-primary'])); ?>

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
                        <button type="button" class="btn btn-primary" name="submit" data-toggle="modal" data-target="#poistakayttaja">
                            Poista käyttäjä
                        </button>
                        <br>
                    </div>
                </form>
            </div>
            <br>
            <div id="omatilmoitukset" class="container tab-pane fade"><br>
                <h2>Ilmoitus 1</h2>
                    <h3>Ikkunoiden pesu</h3>
                    <p>Kategoria<br>
                    <br>
                    Tarjoan....... </p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ilmoituksenpoisto">Poista ilmoitus</button>
                <hr>
                <h2>Ilmoitus 2</h2>
                    <h3>Talvirenkaiden vaihto</h3>
                    <p>Kategoria<br>
                    <br>
                    Etsitään renkaidenvaihtajaa....... </p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ilmoituksenpoisto">Poista ilmoitus</button>
                <br>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>