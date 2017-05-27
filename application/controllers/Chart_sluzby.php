<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart_sluzby extends CI_Controller{

    function __construct(){
        parent:: __construct();
        $this->load->model('Chart_sluzby_m', 'm');
    }

    function sluzby(){
        $data['sluzby'] = $this->m->get_sluzby();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Charts/sluzby', $data);
        $this->load->view('template/footer');
    }
}