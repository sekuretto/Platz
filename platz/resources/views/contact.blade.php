
    <h1>jee</h1>
    <div class="modal hide fade" tabindex="-1" role="dialog" id="palaute">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Palautelomake</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <form method="post" action="{{ route('contact.store') }}">
                      {{ csrf_filed() }}
                      
                        <div class="form-group col-md-6">
                             <label for="staticEmail">Otsikko </label>
                             <input type="text" class="form-control" id="staticEmail">
                        </div>
                        <div class="form-group col-md-6">
                             <label for="staticEmail">Sähköpostiosoitteesi </label>
                             <input type="text" class="form-control" id="staticEmail">
                         </div>
                            <div class="form-group col-md-7">Kerro palautteesi
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder=""></textarea>
                            </div>
                      <button type="button" class="btn btn-primary">Lähetä palaute</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Peruuta</button>
                    </form>

              </div>
              <div class="modal-footer">
                
              </div>
            </div>
          </div>       
    </div>