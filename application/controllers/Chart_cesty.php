<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart_cesty extends CI_Controller{

    function __construct(){
        parent:: __construct();
        $this->load->model('Chart_cesty_m', 'm');
    }

    function cesty(){
        $data['cesty'] = $this->m->get_activity();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Charts/cesty', $data);
        $this->load->view('template/footer');
    }
}