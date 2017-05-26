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

<center><h3>Tabuľka Auto  &nbsp;&nbsp;
        <a href="<?php echo base_url('cesty.php/Auto/add'); ?>" class="btn btn-success btn-xs""><span class="glyphicon">&#x2b;</span>&nbsp;Pridať záznam</a></h3></center><br>
<table class="table table-bordered table-responsive">
    <thead>
    <tr>
        <th>ID</th>
        <th>Vodic</th>
        <th>Znacka</th>
        <th>Typ</th>
        <th>SPZ</th>
        <th>Action</th>
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
                <td>
                    <a href="<?php echo base_url('cesty.php/Auto/edit/'.$auto->ID); ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                    <a href="<?php echo base_url('cesty.php/Auto/delete/'.$auto->ID); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Naozaj chcete vymazať tento záznam?');"><i class="fa fa-trash-o "></i></a>
                </td>
            </tr>
            <?php
        }
    }
    ?>
    </tbody>
</table>
