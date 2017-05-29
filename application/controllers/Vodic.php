<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vodic extends CI_Controller{

    function __construct(){
        parent:: __construct();
        $this->load->model('Vodic_m', 'm');
        $this->load->library('pagination');
    }

    function index(){
        $this->load->library('pagination');
        $query = $this->db->query("SELECT COUNT(*) AS count FROM Vodic");
        $result = $query->result();
        $count = $result[0]->count;

        $config = array(
            'base_url'   => base_url().'index.php/Vodic/index/',
            'total_rows' => $count,
            'per_page'   => 5,
            'num_links'  => 1,

            'first_link' => "<< ",
            'last_link' => " >>",
        );

        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";

        $this->pagination->initialize($config);

        $this->load->library('table');
        $data['vodic'] = $this->m->getVodic($config['per_page'], $this->uri->segment(3));

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Vodic/index', $data);
        $this->load->view('template/footer');
    }

    public function add(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Vodic/add');
        $this->load->view('template/footer');
    }

    public function submit(){
        $result = $this->m->submit();
        if($result){
            $this->session->set_flashdata('success_msg', 'Záznam bol úspešné pridaný');
        }else{
            $this->session->set_flashdata('error_msg', 'Chyba v pridaní záznamu');
        }
        redirect(base_url('index.php/Vodic/index'));
    }

    public function edit($id){
        $data['vodic'] = $this->m->getVodicById($id);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Vodic/edit', $data);
        $this->load->view('template/footer');
    }

    public function update(){
        $result = $this->m->update();
        if($result){
            $this->session->set_flashdata('success_msg', 'Záznam bol úspešné zmenený');
        }else{
            $this->session->set_flashdata('error_msg', 'Chyba v zmenení záznamu');
        }
        redirect(base_url('/index.php/Vodic/index'));
    }

    public function delete($id){
        $result = $this->m->delete($id);
        if($result){
            $this->session->set_flashdata('success_msg', 'Záznam bol úspešné zmazaný');
        }else{
            $this->session->set_flashdata('error_msg', 'Chyba vo vymazaní záznamu');
        }
        redirect(base_url('index.php/Vodic/index'));
    }

}