<h3>Zmena záznamu</h3>
<a href="<?php echo base_url('index.php/Odkial/index'); ?>" class="btn btn-default">Späť</a>
<form action="<?php echo base_url('index.php/Odkial/update') ?>" method="post" class="form-horizontal">
    <input type="hidden" name="txt_hidden" value="<?php echo $odkial->ID; ?>">
    <div class="form-group">
        <label for="title" class="col-md-2 text-right">Ulica</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $odkial->Ulica; ?>" name="ulica" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label for="description" class="col-md-2 text-right">Mesto</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $odkial->Mesto; ?>" name="mesto" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 text-right"></label>
        <div class="col-md-10">
            <button type="submit" name="btnSave" class="btn btn-success btn-xs"><i class="fa fa-check">&nbsp;Zmeň</i></button>
        </div>
    </div>
</form>

