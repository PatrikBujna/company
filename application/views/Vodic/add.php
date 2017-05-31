<center><h3>Pridať záznam</h3></center><br>

<form action="<?php echo base_url('index.php/Vodic/submit') ?>" method="post" class="form-horizontal">
    <div class="form-group">
        <label for="title" class="col-md-1 text-right">Meno</label>
        <div class="col-md-10">
            <input type="text" name="meno" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <label for="description" class="col-md-1 text-right">Priezvisko</label>
        <div class="col-md-10">
            <input type="text" name="priezvisko" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <label for="description" class="col-md-1 text-right">Kontakt</label>
        <div class="col-md-10">
            <input type="text" name="kontakt" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <label for="description" class="col-md-1 text-right">Email</label>
        <div class="col-md-10">
            <input type="text" name="username" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <label for="description" class="col-md-1 text-right">Heslo</label>
        <div class="col-md-10">
            <input type="text" name="password" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <label for="description" class="col-md-1 text-right">Role</label>
        <div class="col-md-10">
            <select class="form-control" name="role">
                <option value="admin">admin</option>
                <option value="user">user</option>
            </select>
        </div>
    </div>

    <center>
        <div class="form-group">
            <label class="col-md-1 text-right"></label>
            <div class="col-md-10">
                <a href="<?php echo base_url('index.php/Vodic/index'); ?>"<button class="btn btn-danger btn-xs"><span class="glyphicon">&#xe257;Späť</span></button></a>
                &nbsp;<button type="submit" name="btnSave" class="btn btn-success btn-xs"><i class="fa fa-check">&nbsp;Pridaj</i></button>
            </div>
        </div>
    </center>
</form>

