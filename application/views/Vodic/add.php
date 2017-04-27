<center><h3>Pridať záznam</h3></center>
<a href="<?php echo base_url('index.php/Vodic/index'); ?>" class="btn btn-default">Späť</a>
<form action="<?php echo base_url('index.php/Vodic/submit') ?>" method="post" class="form-horizontal">
    <div class="form-group">
        <label for="title" class="col-md-2 text-right">Meno</label>
        <div class="col-md-10">
            <input type="text" name="meno" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label for="description" class="col-md-2 text-right">Priezvisko</label>
        <div class="col-md-10">
            <input type="text" name="priezvisko" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label for="description" class="col-md-2 text-right">Kontakt</label>
        <div class="col-md-10">
            <input type="text" name="kontakt" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 text-right"></label>
        <div class="col-md-10">
            <button type="submit" name="btnSave" class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
        </div>
    </div>
</form>

