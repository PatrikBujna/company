<center><h3>Zmena záznamu</h3><br></center>

<form action="<?php echo base_url('index.php/Auto/update') ?>" method="post" class="form-horizontal">
    <input type="hidden" name="txt_hidden" value="<?php echo $auto->ID; ?>">
    <div class="form-group">
        <label for="title" class="col-md-1 text-right">Vodic</label>
        <div class="col-md-10">
            <select class="form-control" name="vodic_id">
                <?php
                if($vodic){
                    foreach($vodic as $vodic){
                        if($vodic->ID == $auto->Vodic_ID) {
                            ?>
                            <option selected
                                    value="<?php echo $vodic->Meno; ?> <?php echo $vodic->Priezvisko; ?>"><?php echo $vodic->Meno; ?> <?php echo $vodic->Priezvisko; ?></option>
                            <?php
                        }else {
                            ?>
                            <option value="<?php echo $vodic->Meno; ?> <?php echo $vodic->Priezvisko; ?>"><?php echo $vodic->Meno; ?> <?php echo $vodic->Priezvisko; ?></option>
                            <?php
                        }
                    }
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="description" class="col-md-1 text-right">Znacka</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $auto->Znacka; ?>" name="znacka" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label for="title" class="col-md-1 text-right">Typ</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $auto->Typ; ?>" name="typ" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label for="description" class="col-md-1 text-right">SPZ</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $auto->SPZ; ?>" name="spz" class="form-control" required>
        </div>
    </div>

    <center>
        <div class="form-group">
            <label class="col-md-1 text-right"></label>
            <div class="col-md-10">
                <a href="<?php echo base_url('index.php/Auto/index'); ?>"<button class="btn btn-danger btn-xs"><span class="glyphicon">&#xe257;Späť</span></button></a>
                &nbsp;<button type="submit" name="btnSave" class="btn btn-success btn-xs"><i class="fa fa-check">&nbsp;Pridaj</i></button>
            </div>
        </div>
    </center>
</form>

