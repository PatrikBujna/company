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

<center><h3>Tabuľka Vodič &nbsp;&nbsp;
        <a href="<?php echo base_url('index.php/Vodic/add'); ?>" class="btn btn-success btn-xs""><span class="glyphicon">&#x2b;</span>&nbsp;Pridať záznam</a></h3></center><br>
<table class="table table-bordered table-responsive">
    <thead>
    <tr>
        <td>ID</td>
        <th>Meno</th>
        <th>Priezvisko</th>
        <th>Kontakt</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if($vodic){
        foreach($vodic as $vodic){
            ?>
            <tr>
                <td><?php echo $vodic->ID; ?></td>
                <td><?php echo $vodic->Meno; ?></td>
                <td><?php echo $vodic->Priezvisko; ?></td>
                <td><?php echo $vodic->Kontakt; ?></td>
                <td><?php echo $vodic->username; ?></td>
                <td>
                    <a href="<?php echo base_url('index.php/Vodic/edit/'.$vodic->ID); ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                    <a href="<?php echo base_url('index.php/Vodic/delete/'.$vodic->ID); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Naozaj chcete vymazať tento záznam?');"><i class="fa fa-trash-o "></i></a>
                </td>
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