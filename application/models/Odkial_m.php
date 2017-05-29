<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Odkial_m extends CI_Model{

    public function getOdkial($limit = 0, $offset = 0){
        $query = $this->db->get('Odkial', $limit, $offset);
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function submit(){
        $field = array(
            'Ulica'=>$this->input->post('ulica'),
            'Mesto'=>$this->input->post('mesto')
        );
        $this->db->insert('Odkial', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function getOdkialById($id){
        $this->db->where('ID', $id);
        $query = $this->db->get('Odkial');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function update(){
        $id = $this->input->post('txt_hidden');
        $field = array(
            'Ulica'=>$this->input->post('ulica'),
            'Mesto'=>$this->input->post('mesto')
        );
        $this->db->where('ID', $id);
        $this->db->update('Odkial', $field);
        echo $this->db->last_query();extit;
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id){
        $this->db->where('ID', $id);
        $this->db->delete('Odkial');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

}