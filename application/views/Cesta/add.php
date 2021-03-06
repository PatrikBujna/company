<center><h3>Pridať záznam</h3></center><br>

<form action="<?php echo base_url('index.php/Cesta/submit') ?>" method="post" class="form-horizontal">
    <div class="form-group">
        <label for="title" class="col-md-1 text-right">Odkial</label>
        <div class="col-md-10">
            <select class="form-control" name="odkial_id">
                <?php
                if($odkial){
                    foreach($odkial as $odkial){
                        ?>
                        <option value="<?php echo $odkial->Ulica;?>, <?php echo $odkial->Mesto;?>"><?php echo $odkial->Ulica;?>, <?php echo $odkial->Mesto;?></option>
                        <?php
                    }
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="title" class="col-md-1 text-right">Kam</label>
        <div class="col-md-10">
            <select class="form-control" name="kam_id">
                <?php
                if($kam){
                    foreach($kam as $kam){
                        ?>
                        <option value="<?php echo $kam->Ulica; ?>, <?php echo $kam->Mesto; ?>"><?php echo $kam->Ulica; ?>, <?php echo $kam->Mesto; ?></option>
                        <?php
                    }
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="title" class="col-md-1 text-right">Auto</label>
        <div class="col-md-10">
            <select class="form-control" name="auto_id">
                <?php
                if($auto){
                    foreach($auto as $auto){
                        ?>
                        <option value="<?php echo $auto->Znacka; ?>, <?php echo $auto->Typ; ?>"><?php echo $auto->Znacka; ?> <?php echo $auto->Typ; ?></option>
                        <?php
                    }
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="description" class="col-md-1 text-right">Cena</label>
        <div class="col-md-10">
            <input type="text" name="cena" class="form-control" required>
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
                <a href="<?php echo base_url('index.php/Cesta/index'); ?>"<button class="btn btn-danger btn-xs"><span class="glyphicon">&#xe257;Späť</span></button></a>
                &nbsp;<button type="submit" name="btnSave" class="btn btn-success btn-xs"><i class="fa fa-check">&nbsp;Pridaj</i></button>
            </div>
        </div>
    </center>
</form>

