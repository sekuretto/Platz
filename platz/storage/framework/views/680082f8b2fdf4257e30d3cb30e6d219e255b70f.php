
<div class="modal hide fade" role="dialog" id="palaute">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Palautelomake</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form action="<?php echo e(route('contact.store')); ?>" method="POST">
                  <?php echo e(csrf_field()); ?>

                    <div class="form-group col-md-6">
                         <label for="staticEmail">Otsikko </label>
                         <input name="subject" type="text" class="form-control">
                        <?php if($errors->has('subject')): ?>
                        <small class="from-text invalid-feedback"><?php echo e($errors->first('subject')); ?></small>
                        <?php endif; ?>
                    </div>
                    <div class="form-group col-md-6">
                         <label for="staticEmail">Sähköpostiosoitteesi </label>
                         <input name="email" type="text" class="form-control">
                        <?php if($errors->has('email')): ?>
                        <small class="from-text invalid-feedback"><?php echo e($errors->first('email')); ?></small>
                        <?php endif; ?>
                     </div>
                        <div class="form-group col-md-7">Kerro palautteesi
                            <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder=""></textarea>
                            <?php if($errors->has('message')): ?>
                        <small class="from-text invalid-feedback"><?php echo e($errors->first('message')); ?></small>
                        <?php endif; ?>
                        </div>
                  <button type="submit" class="btn btn-primary">Lähetä palaute</button>
                </form>

          </div>
          <div class="modal-footer">
            
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Peruuta</button>
          </div>
        </div>
      </div>       
</div>