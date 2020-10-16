<div id="dodaj_kontrahenta" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Dodaj nowego kontrahenta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="add-form" method="post" action="kontrahent_nowy.php">
            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip">
            </div>
            <div class="form-group">
                <label for="regon">REGON</label>
                <input type="number" class="form-control" id="regon" name="regon">
            </div>
            <div class="form-group">
                <label for="nazwa">Nazwa</label>
                <input type="text" class="form-control" id="nazwa" name="nazwa">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Czy podatnik VAT</label>
                <select class="form-control" id="platnikVat" name="platnikVat">
                <option value="Tak">Tak</option>
                <option value="Nie">Nie</option>
                </select>
             </div>
            <div class="form-group">
                <label for="ulica">Ulica</label>
                <input type="text" class="form-control" id="ulica" name="ulica">
            </div>
            <div class="form-group">
                <label for="nrdomu">Numer domu</label>
                <input type="text" class="form-control" id="nr_domu" name="nr_domu">
            </div>
            <div class="form-group">
                <label for="nrmieszkania">Numer mieszkania</label>
                <input type="text" class="form-control" id="nr_mieszkania" name="nr_mieszkania">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" form="add-form" class="btn btn-primary" name="kontrahentSave">Zapisz</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Anuluj</button>
      </div>
    </div>
  </div>
</div>