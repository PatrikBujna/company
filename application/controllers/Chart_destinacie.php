<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart_destinacie extends CI_Controller{

    function __construct(){
        parent:: __construct();
        $this->load->model('Chart_destinacie_m', 'm');
    }

    function destinacie(){
        $data['destinacie'] = $this->m->get_destinacie();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Charts/destinacie', $data);
        $this->load->view('template/footer');
    }
}