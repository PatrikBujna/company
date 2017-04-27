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
        <a href="<?php echo base_url('index.php/Odkial/add'); ?>" class="btn btn-success btn-xs""><i class="fa fa-check">&nbsp;Pridať záznam</i></a></h3></center>
<table class="table table-bordered table-responsive">
    <thead>
    <tr>
        <td>ID</td>
        <th>Meno</th>
        <th>Priezvisko</th>
        <th>Kontakt</th>
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