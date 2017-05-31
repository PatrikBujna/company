<?php
if($this->session->flashdata('success_msg')){
    ?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('success_msg'); ?>
    </div>
    <?php
}
?>


<?php
if($this->session->flashdata('error_msg')){
    ?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('error_msg'); ?>
    </div>
    <?php
}
?>

<?php
    $username = $this->session->userdata('username');
    $query = $this->db->query("SELECT role FROM `Vodic` WHERE username LIKE '$username'");
    $result = $query->result();
    $role = $result[0]->role;
?>

<center><h3>Tabuľka Služba &nbsp;&nbsp;
    <?php if ($role == 'admin'): ?>
        <a href="<?php echo base_url('index.php/Sluzba/add'); ?>" class="btn btn-success btn-xs""><span class="glyphicon">&#x2b;</span>&nbsp;Pridať záznam</a>
    <?php endif; ?>
</h3></center><br>

<table class="table table-bordered table-responsive">
    <thead>
    <tr>
        <td>ID</td>
        <th>Vodic</th>
        <th>Datum</th>
        <?php if ($role == 'admin'): ?>
            <th>Action</th>
        <?php endif; ?>
    </tr>
    </thead>
    <tbody>
    <?php
    if($sluzba){
        foreach($sluzba as $sluzba){
            ?>
            <tr>
                <td><?php echo $sluzba->ID; ?></td>
                <td><?php echo $sluzba->vMeno; ?> <?php echo $sluzba->vPriezvisko; ?></td>
                <td><?php echo $sluzba->Datum; ?></td>
                <?php if ($role == 'admin'): ?>
                    <td>
                        <a href="<?php echo base_url('index.php/Sluzba/edit/'.$sluzba->ID); ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo base_url('index.php/Sluzba/delete/'.$sluzba->ID); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Naozaj chcete vymazať tento záznam?');"><i class="fa fa-trash-o "></i></a>
                    </td>
                <?php endif; ?>
            </tr>
            <?php
        }
    }
    ?>
    </tbody>
</table>

<center>
    <?php echo $this->pagination->create_links() ?>
</center>