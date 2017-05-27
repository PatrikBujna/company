<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Odkial extends CI_Controller{

    function __construct(){
        parent:: __construct();
        $this->load->model('Odkial_m', 'm');
    }

    function index(){
        $data['odkial'] = $this->m->getOdkial();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Odkial/index', $data);
        $this->load->view('template/footer');
    }

    public function add(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Odkial/add');
        $this->load->view('template/footer');
    }

    public function submit(){
        $result = $this->m->submit();
        if($result){
            $this->session->set_flashdata('success_msg', 'Záznam bol úspešné pridaný');
        }else{
            $this->session->set_flashdata('error_msg', 'Chyba v pridaní záznamu');
        }
        redirect(base_url('index.php/Odkial/index'));
    }

    public function edit($id){
        $data['odkial'] = $this->m->getOdkialById($id);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Odkial/edit', $data);
        $this->load->view('template/footer');
    }

    public function update(){
        $result = $this->m->update();
        if($result){
            $this->session->set_flashdata('success_msg', 'Záznam bol úspešné zmenený');
        }else{
            $this->session->set_flashdata('error_msg', 'Chyba v zmenení záznamu');
        }
        redirect(base_url('/index.php/Odkial/index'));
    }

    public function delete($id){
        $result = $this->m->delete($id);
        if($result){
            $this->session->set_flashdata('success_msg', 'Záznam bol úspešné zmazaný');
        }else{
            $this->session->set_flashdata('error_msg', 'Chyba vo vymazaní záznamu');
        }
        redirect(base_url('index.php/Odkial/index'));
    }

}