
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
              <form action="{{ route('contact.store') }}" method="POST">
                  {{ csrf_field() }}
                    <div class="form-group col-md-6">
                         <label for="staticEmail">Otsikko </label>
                         <input name="subject" type="text" class="form-control">
                        
                    </div>
                    <div class="form-group col-md-6">
                         <label for="staticEmail">Sähköpostiosoitteesi </label>
                         <input name="email" type="text" class="form-control">
                       
                     </div>
                        <div class="form-group col-md-7">Kerro palautteesi
                            <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder=""></textarea>
                        
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