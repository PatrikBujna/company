<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cesta extends CI_Controller{

    function __construct(){
        parent:: __construct();
        $this->load->model('Cesta_m', 'm');
    }

    function index(){
        $data['cesta'] = $this->m->getCesta();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Cesta/index', $data);
        $this->load->view('template/footer');
    }

    public function add(){
        $data['odkial'] = $this->m->getOdkialGroupID();
        $data['kam'] = $this->m->getKamGroupID();
        $data['auto'] = $this->m->getAutoGroupID();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Cesta/add', $data);
        $this->load->view('template/footer');
    }

    public function submit(){
        $result = $this->m->submit();
        if($result){
            $this->session->set_flashdata('success_msg', 'Záznam bol úspešné pridaný');
        }else{
            $this->session->set_flashdata('error_msg', 'Chyba v pridaní záznamu');
        }
        redirect(base_url('index.php/Cesta/index'));
    }

    public function edit($id){
        $data['id'] = $this->m->getCestaById($id);
        $data['odkial'] = $this->m->getOdkialGroupID();
        $data['kam'] = $this->m->getKamGroupID();
        $data['auto'] = $this->m->getAutoGroupID();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Cesta/edit', $data);
        $this->load->view('template/footer');
    }

    public function update(){
        $result = $this->m->update();
        if($result){
            $this->session->set_flashdata('success_msg', 'Záznam bol úspešné zmenený');
        }else{
            $this->session->set_flashdata('error_msg', 'Chyba v zmenení záznamu');
        }
        redirect(base_url('/index.php/Cesta/index'));
    }

    public function delete($id){
        $result = $this->m->delete($id);
        if($result){
            $this->session->set_flashdata('success_msg', 'Záznam bol úspešné zmazaný');
        }else{
            $this->session->set_flashdata('error_msg', 'Chyba vo vymazaní záznamu');
        }
        redirect(base_url('index.php/Cesta/index'));
    }

}