<center><h3>Pridať záznam</h3></center>
<a href="<?php echo base_url('index.php/Sluzba/index'); ?>" class="btn btn-default">Späť</a>
<form action="<?php echo base_url('index.php/Sluzba/submit') ?>" method="post" class="form-horizontal">
    <div class="form-group">
        <label for="title" class="col-md-2 text-right">Vodic_ID</label>
        <div class="col-md-10">
            <input type="text" name="vodic_id" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label for="description" class="col-md-2 text-right">Datum</label>
        <div class="col-md-10">
            <input type="text" name="datum" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 text-right"></label>
        <div class="col-md-10">
            <button type="submit" name="btnSave" class="btn btn-success btn-xs"><i class="fa fa-check">&nbsp;Pridať</i></button>
        </div>
    </div>
</form>

