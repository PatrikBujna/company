<h3>Zmena záznamu</h3>
<a href="<?php echo base_url('index.php/Auto/index'); ?>" class="btn btn-default">Späť</a>
<form action="<?php echo base_url('index.php/Auto/update') ?>" method="post" class="form-horizontal">
    <input type="hidden" name="txt_hidden" value="<?php echo $auto->ID; ?>">
    <div class="form-group">
        <label for="title" class="col-md-2 text-right">Vodic_ID</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $auto->Vodic_ID; ?>" name="vodic_id" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label for="description" class="col-md-2 text-right">Znacka</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $auto->Znacka; ?>" name="znacka" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label for="title" class="col-md-2 text-right">Typ</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $auto->Typ; ?>" name="typ" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label for="description" class="col-md-2 text-right">SPZ</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $auto->SPZ; ?>" name="spz" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 text-right"></label>
        <div class="col-md-10">
            <button type="submit" name="btnSave" class="btn btn-success btn-xs"><i class="fa fa-check">&nbsp;Zmeň</i></button>
        </div>
    </div>
</form>

