<center><h3>Zmena záznamu</h3></center><br>

<form action="<?php echo base_url('cesty.php/Sluzba/update') ?>" method="post" class="form-horizontal">
    <input type="hidden" name="txt_hidden" value="<?php echo $id->ID; ?>">
    <div class="form-group">
        <label for="title" class="col-md-1 text-right">Vodic_ID</label>
        <div class="col-md-10">
            <select class="form-control" name="vodic_id">
                <?php
                if($sluzba){
                    foreach($sluzba as $sluzba){
                        if($sluzba->ID == $id->Vodic_ID) {
                            ?>
                            <option selected
                                    value="<?php echo $sluzba->Meno; ?> <?php echo $sluzba->Priezvisko; ?>"><?php echo $sluzba->Meno; ?> <?php echo $sluzba->Priezvisko; ?></option>
                            <?php
                        }else {
                            ?>
                            <option value="<?php echo $sluzba->Meno; ?> <?php echo $sluzba->Priezvisko; ?>"><?php echo $sluzba->Meno; ?> <?php echo $sluzba->Priezvisko; ?></option>
                            <?php
                        }
                    }
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="description" class="col-md-1 text-right">Datum</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $id->Datum; ?>" name="datum" class="form-control" required>
        </div>
    </div>

    <center>
        <div class="form-group">
            <label class="col-md-1 text-right"></label>
            <div class="col-md-10">
                <a href="<?php echo base_url('cesty.php/Sluzba/index'); ?>"<button class="btn btn-danger btn-xs"><span class="glyphicon">&#xe257;Späť</span></button></a>
                &nbsp;<button type="submit" name="btnSave" class="btn btn-success btn-xs"><i class="fa fa-check">&nbsp;Zmeň</i></button>
            </div>
        </div>
    </center>
</form>

