<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kam extends CI_Controller{

    function __construct(){
        parent:: __construct();
        $this->load->model('Kam_m', 'm');
    }

    function index(){
        $data['kam'] = $this->m->getKam();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Kam/index', $data);
        $this->load->view('template/footer');
    }

    public function add(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Kam/add');
        $this->load->view('template/footer');
    }

    public function submit(){
        $result = $this->m->submit();
        if($result){
            $this->session->set_flashdata('success_msg', 'Záznam bol úspešné pridaný');
        }else{
            $this->session->set_flashdata('error_msg', 'Chyba v pridaní záznamu');
        }
        redirect(base_url('cesty.php/Kam/index'));
    }

    public function edit($id){
        $data['kam'] = $this->m->getKamById($id);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Kam/edit', $data);
        $this->load->view('template/footer');
    }

    public function update(){
        $result = $this->m->update();
        if($result){
            $this->session->set_flashdata('success_msg', 'Záznam bol úspešné zmenený');
        }else{
            $this->session->set_flashdata('error_msg', 'Chyba v zmenení záznamu');
        }
        redirect(base_url('/cesty.php/Kam/index'));
    }

    public function delete($id){
        $result = $this->m->delete($id);
        if($result){
            $this->session->set_flashdata('success_msg', 'Záznam bol úspešné zmazaný');
        }else{
            $this->session->set_flashdata('error_msg', 'Chyba vo vymazaní záznamu');
        }
        redirect(base_url('cesty.php/Kam/index'));
    }

}