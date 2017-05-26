<center><h3>Pridať záznam</h3></center><br>
<form action="<?php echo base_url('cesty.php/Sluzba/submit') ?>" method="post" class="form-horizontal">
    <div class="form-group">
        <label for="title" class="col-md-1 text-right">Vodic_ID</label>
        <div class="col-md-10">
            <select class="form-control" name="vodic_id">
                <?php
                    if($sluzba){
                        foreach($sluzba as $sluzba){
                            ?>
                                <option value="<?php echo $sluzba->Meno; ?> <?php echo $sluzba->Priezvisko; ?>"><?php echo $sluzba->Meno; ?> <?php echo $sluzba->Priezvisko; ?></option>
                            <?php
                        }
                    }


                ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="description" class="col-md-1 text-right">Datum</label>
        <div class="col-md-10">
            <input type="text" name="datum" class="form-control" placeholder="RRRR-MM-DD" required>
        </div>
    </div>

    <center>
        <div class="form-group">
            <label class="col-md-1 text-right"></label>
            <div class="col-md-10">
                <a href="<?php echo base_url('cesty.php/Sluzba/index'); ?>"<button class="btn btn-danger btn-xs"><span class="glyphicon">&#xe257;Späť</span></button></a>
                &nbsp;<button type="submit" name="btnSave" class="btn btn-success btn-xs"><i class="fa fa-check">&nbsp;Pridaj</i></button>
            </div>
        </div>
    </center>
</form>

