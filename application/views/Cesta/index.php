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

<center><h3>Tabuľka Cesta &nbsp;&nbsp;
        <a href="<?php echo base_url('index.php/Cesta/add'); ?>" class="btn btn-success btn-xs""><span class="glyphicon">&#x2b;</span>&nbsp;Pridať záznam</a></h3></center><br>
<table class="table table-bordered table-responsive">
    <thead>
    <tr>
        <td>ID</td>
        <th>Odkial</th>
        <th>Kam</th>
        <th>Auto</th>
        <th>Cena</th>
        <th>Datum</th>
        <?php if ($role == 'admin'): ?>
            <th>Action</th>
        <?php endif; ?>
    </tr>
    </thead>
    <tbody>
    <?php
    if($cesta){
        foreach($cesta as $cesta){
            ?>
            <tr>
                <td><?php echo $cesta->ID; ?></td>
                <td><?php echo $cesta->oUlica; ?>, <?php echo $cesta->oMesto; ?></td>
                <td><?php echo $cesta->kUlica; ?>, <?php echo $cesta->kMesto; ?></td>
                <td><?php echo $cesta->Znacka; ?> <?php echo $cesta->Typ; ?></td>
                <td><?php echo $cesta->Cena; ?></td>
                <td><?php echo $cesta->Datum; ?></td>
                <?php if ($role == 'admin'): ?>
                    <td>
                        <a href="<?php echo base_url('index.php/Cesta/edit/'.$cesta->ID); ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo base_url('index.php/Cesta/delete/'.$cesta->ID); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Naozaj chcete vymazať tento záznam?');"><i class="fa fa-trash-o "></i></a>
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