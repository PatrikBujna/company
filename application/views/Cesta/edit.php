<center><h3>Zmena záznamu</h3></center><br>

<form action="<?php echo base_url('index.php/Cesta/update') ?>" method="post" class="form-horizontal">
    <input type="hidden" name="txt_hidden" value="<?php echo $id->ID; ?>">
    <div class="form-group">
        <label for="title" class="col-md-1 text-right">Odkial</label>
        <div class="col-md-10">
            <select class="form-control" name="odkial_id">
                <?php
                if($odkial){
                    foreach($odkial as $odkial){
                        if($odkial->Odkial_ID == $id->Odkial_ID) {
                            ?>
                            <option selected
                                    value="<?php echo $odkial->Ulica; ?> <?php echo $odkial->Mesto; ?>"><?php echo $odkial->Ulica; ?>, <?php echo $odkial->Mesto; ?></option>
                            <?php
                        }else {
                            ?>
                            <option value="<?php echo $odkial->Ulica; ?> <?php echo $odkial->Mesto; ?>"><?php echo $odkial->Ulica; ?>, <?php echo $odkial->Mesto; ?></option>
                            <?php
                        }
                    }
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="title" class="col-md-1 text-right">Kam_ID</label>
        <div class="col-md-10">
            <select class="form-control" name="kam_id">
                <?php
                if($kam){
                    foreach($kam as $kam){
                        if($kam->Kam_ID == $id->Kam_ID) {
                            ?>
                            <option selected
                                    value="<?php echo $kam->Ulica; ?> <?php echo $kam->Mesto; ?>"><?php echo $kam->Ulica; ?>, <?php echo $kam->Mesto; ?></option>
                            <?php
                        }else {
                            ?>
                            <option value="<?php echo $kam->Ulica; ?> <?php echo $kam->Mesto; ?>"><?php echo $kam->Ulica; ?>, <?php echo $kam->Mesto; ?></option>
                            <?php
                        }
                    }
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="title" class="col-md-1 text-right">Auto_ID</label>
        <div class="col-md-10">
            <select class="form-control" name="auto_id">
                <?php
                if($auto){
                    foreach($auto as $auto){
                        if($auto->Auto_ID == $id->Auto_ID) {
                            ?>
                            <option selected
                                    value="<?php echo $auto->Znacka; ?> <?php echo $auto->Typ; ?>"><?php echo $auto->Znacka; ?> <?php echo $auto->Typ; ?></option>
                            <?php
                        }else {
                            ?>
                            <option value="<?php echo $auto->Znacka; ?> <?php echo $auto->Typ; ?>"><?php echo $auto->Znacka; ?> <?php echo $auto->Typ; ?></option>
                            <?php
                        }
                    }
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="title" class="col-md-1 text-right">Cena</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $id->Cena; ?>" name="cena" class="form-control" required>
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
                <a href="<?php echo base_url('index.php/Cesta/index'); ?>"<button class="btn btn-danger btn-xs"><span class="glyphicon">&#xe257;Späť</span></button></a>
                &nbsp;<button type="submit" name="btnSave" class="btn btn-success btn-xs"><i class="fa fa-check">&nbsp;Zmeň</i></button>
            </div>
        </div>
    </center>
</form>

