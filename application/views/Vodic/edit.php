
<h3>Zmena záznamu</h3>
<a href="<?php echo base_url('index.php/Vodic/index'); ?>" class="btn btn-default">Späť</a>
<form action="<?php echo base_url('index.php/Vodic/update') ?>" method="post" class="form-horizontal">
    <input type="hidden" name="txt_hidden" value="<?php echo $vodic->ID; ?>">
    <div class="form-group">
        <label for="title" class="col-md-2 text-right">Meno</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $vodic->Meno; ?>" name="meno" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label for="description" class="col-md-2 text-right">Priezvisko</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $vodic->Priezvisko; ?>" name="priezvisko" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label for="description" class="col-md-2 text-right">Kontakt</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $vodic->Kontakt; ?>" name="kontakt" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 text-right"></label>
        <div class="col-md-10">
            <input type="submit" name="btnUpdate" class="btn btn-primary" value="Zmeň">
        </div>
    </div>
</form>

