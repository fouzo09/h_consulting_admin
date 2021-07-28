<div class="form-group">
    <div class="col-sm-8 offset-2">
        <label class="" for="nom"><b>Nom</b></label>
        <input type="text" placeholder="Exemple: RH, Logistique, maintenance" name="nom" id="nom" class="form-control">
        <span class="text-danger">{{ ($errors->has('nom')) ? $errors->first('nom') : '' }}</span>
    </div>
</div>
