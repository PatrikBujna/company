<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auto extends CI_Controller{

    function __construct(){
        parent:: __construct();
        $this->load->model('Auto_m', 'm');
    }

    function index(){
        $data['auto'] = $this->m->getAuto();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Auto/index', $data);
        $this->load->view('template/footer');
    }

    public function add(){
        $data['vodic'] = $this->m->getAllVodic();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Auto/add', $data);
        $this->load->view('template/footer');
    }

    public function submit(){
        $result = $this->m->submit();
        if($result){
            $this->session->set_flashdata('success_msg', 'Záznam bol úspešné pridaný');
        }else{
            $this->session->set_flashdata('error_msg', 'Chyba v pridaní záznamu');
        }
        redirect(base_url('index.php/Auto/index'));
    }

    public function edit($id){
        $data['auto'] = $this->m->getAutoById($id);
        $data['vodic'] = $this->m->getAllVodic();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Auto/edit', $data);
        $this->load->view('template/footer');
    }

    public function update(){
        $result = $this->m->update();
        if($result){
            $this->session->set_flashdata('success_msg', 'Záznam bol úspešné zmenený');
        }else{
            $this->session->set_flashdata('error_msg', 'Chyba v zmenení záznamu');
        }
        redirect(base_url('/index.php/Auto/index'));
    }

    public function delete($id){
        $result = $this->m->delete($id);
        if($result){
            $this->session->set_flashdata('success_msg', 'Záznam bol úspešné zmazaný');
        }else{
            $this->session->set_flashdata('error_msg', 'Chyba vo vymazaní záznamu');
        }
        redirect(base_url('index.php/Auto/index'));
    }

}