<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vodic_m extends CI_Model{

    public function getVodic(){
        $query = $this->db->get('Vodic');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function submit(){
        $field = array(
            'Meno'=>$this->input->post('meno'),
            'Priezvisko'=>$this->input->post('priezvisko'),
            'Kontakt'=>$this->input->post('kontakt')
        );
        $this->db->insert('Vodic', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function getVodicById($id){
        $this->db->where('ID', $id);
        $query = $this->db->get('Vodic');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function update(){
        $id = $this->input->post('txt_hidden');
        $field = array(
            'Meno'=>$this->input->post('meno'),
            'Priezvisko'=>$this->input->post('priezvisko'),
            'Kontakt'=>$this->input->post('kontakt')
        );
        $this->db->where('ID', $id);
        $this->db->update('Vodic', $field);
        echo $this->db->last_query();extit;
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id){
        $this->db->where('ID', $id);
        $this->db->delete('Vodic');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

}