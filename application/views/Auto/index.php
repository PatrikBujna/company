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


<center>
    <h3>Tabuľka Auto  &nbsp;&nbsp;
        <?php if ($role == 'admin'): ?>
            <a href="<?php echo base_url('index.php/Auto/add'); ?>" class="btn btn-success btn-xs""><span class="glyphicon">&#x2b;</span>&nbsp;Pridať záznam</a>
        <?php endif; ?>

    </h3><br>
</center>
<table class="table table-bordered table-responsive">
    <thead>
    <tr>
        <th>ID</th>
        <th>Vodic</th>
        <th>Znacka</th>
        <th>Typ</th>
        <th>SPZ</th>
        <?php if ($role == 'admin'): ?>
            <th>Action</th>
        <?php endif; ?>
    </tr>
    </thead>
    <tbody>
    <?php
    if($auto){
        foreach($auto as $auto){
            ?>
            <tr>
                <td><?php echo $auto->ID; ?></td>
                <td><?php echo $auto->vMeno; ?> <?php echo $auto->vPriezvisko; ?></td>
                <td><?php echo $auto->Znacka; ?></td>
                <td><?php echo $auto->Typ; ?></td>
                <td><?php echo $auto->SPZ; ?></td>
                <?php if ($role == 'admin'): ?>
                    <td>
                        <a href="<?php echo base_url('index.php/Auto/edit/'.$auto->ID); ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo base_url('index.php/Auto/delete/'.$auto->ID); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Naozaj chcete vymazať tento záznam?');"><i class="fa fa-trash-o "></i></a>
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
    <? echo $this->pagination->create_links() ?>
</center>