<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart_odchod extends CI_Controller{

    function __construct(){
        parent:: __construct();
        $this->load->model('Chart_odchod_m', 'm');
    }

    function odchod(){
        $data['odchod'] = $this->m->get_odchod();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Charts/odchod', $data);
        $this->load->view('template/footer');
    }
}