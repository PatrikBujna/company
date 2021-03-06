<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><img src="<?php echo base_url(); ?>assets/img/ui-sam.jpg" class="img-circle" width="60"></p>
            <h5 class="centered">
                <?php
                    $username = $this->session->userdata('username');
                    $query = $this->db->query("SELECT Meno, Priezvisko, role FROM `Vodic` WHERE username LIKE '$username'");
                    $result = $query->result();
                    $meno = $result[0]->Meno;
                    $priezvisko = $result[0]->Priezvisko;
                    $role = $result[0]->role;
                    echo $meno.' '.$priezvisko;
                ?>
            </h5>

            <li class="mt">
                <a class="active" href="<?php echo base_url() . "index.php/Home/index" ?>">
                    <i class="fa fa-dashboard"></i>
                    <span>Domov</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-th"></i>
                    <span>Tabuľky</span>
                </a>
                <ul class="sub">
                    <li><a href="<?php echo base_url(); ?>index.php/Auto/index">Auto</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/Cesta/index">Cesta</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/Kam/index">Kam</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/Odkial/index">Odkial</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/Sluzba/index">Služba</a></li>
                    <?php if ($role == 'admin'): ?>
                        <li><a href="<?php echo base_url(); ?>index.php/Vodic/index">Vodič</a></li>
                    <?php endif; ?>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class=" fa fa-bar-chart-o"></i>
                    <span>Grafy</span>
                </a>
                <ul class="sub">
                    <li><a  href="<?php echo base_url(); ?>index.php/Chart_cesty/cesty">Cesty</a></li>
                    <li><a  href="<?php echo base_url(); ?>index.php/Chart_sluzby/sluzby">Služby</a></li>
                    <li><a  href="<?php echo base_url(); ?>index.php/Chart_destinacie/destinacie">Destinácie</a></li>
                    <li><a  href="<?php echo base_url(); ?>index.php/Chart_odchod/odchod">Miesta odchodu</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
    <section id="main-content">
        <section class="wrapper site-min-height">