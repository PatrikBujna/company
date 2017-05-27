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

<center><h3>Tabuľka Kam &nbsp;&nbsp;
        <a href="<?php echo base_url('index.php/Kam/add'); ?>" class="btn btn-success btn-xs""><span class="glyphicon">&#x2b;</span>&nbsp;Pridať záznam</a></h3></center><br>
<table class="table table-bordered table-responsive">
    <thead>
    <tr>
        <td>ID</td>
        <th>Ulica</th>
        <th>Mesto</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if($kam){
        foreach($kam as $kam){
            ?>
            <tr>
                <td><?php echo $kam->ID; ?></td>
                <td><?php echo $kam->Ulica; ?></td>
                <td><?php echo $kam->Mesto; ?></td>
                <td>
                    <a href="<?php echo base_url('index.php/Kam/edit/'.$kam->ID); ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                    <a href="<?php echo base_url('index.php/Kam/delete/'.$kam->ID); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Naozaj chcete vymazať tento záznam?');"><i class="fa fa-trash-o "></i></a>
                </td>
            </tr>
            <?php
        }
    }
    ?>
    </tbody>
</table>
