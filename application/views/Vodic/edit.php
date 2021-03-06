<center><h3>Zmena záznamu</h3></center><br>

<form action="<?php echo base_url('index.php/Vodic/update') ?>" method="post" class="form-horizontal">
    <input type="hidden" name="txt_hidden" value="<?php echo $vodic->ID; ?>">
    <div class="form-group">
        <label for="title" class="col-md-1 text-right">Meno</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $vodic->Meno; ?>" name="meno" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <label for="description" class="col-md-1 text-right">Priezvisko</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $vodic->Priezvisko; ?>" name="priezvisko" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <label for="description" class="col-md-1 text-right">Kontakt</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $vodic->Kontakt; ?>" name="kontakt" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <label for="description" class="col-md-1 text-right">Email</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $vodic->username; ?>" name="username" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <label for="description" class="col-md-1 text-right">Heslo</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $vodic->password; ?>" name="password" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <label for="title" class="col-md-1 text-right">Role</label>
        <div class="col-md-10">
            <select class="form-control" name="role">
                <?php if($vodic->role == 'admin'): ?>
                    <option selected value="admin">admin</option>
                    <option value="user">user</option>
                <?php endif; ?>
                <?php if($vodic->role == 'user'): ?>
                    <option value="admin">admin</option>
                    <option selected value="user">user</option>
                <?php endif; ?>
            </select>
        </div>
    </div>

    <center>
        <div class="form-group">
            <label class="col-md-1 text-right"></label>
            <div class="col-md-10">
                <a href="<?php echo base_url('index.php/Vodic/index'); ?>"<button class="btn btn-danger btn-xs"><span class="glyphicon">&#xe257;Späť</span></button></a>
                &nbsp;<button type="submit" name="btnSave" class="btn btn-success btn-xs"><i class="fa fa-check">&nbsp;Zmeň</i></button>
            </div>
        </div>
    </center>
</form>

