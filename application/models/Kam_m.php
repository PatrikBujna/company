<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kam_m extends CI_Model{

    public function getKam(){
        $query = $this->db->get('Kam');
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
        $this->db->insert('Kam', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function getKamById($id){
        $this->db->where('ID', $id);
        $query = $this->db->get('Kam');
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
        $this->db->update('Kam', $field);
        echo $this->db->last_query();extit;
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id){
        $this->db->where('ID', $id);
        $this->db->delete('Kam');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

}