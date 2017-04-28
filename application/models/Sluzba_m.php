<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sluzba_m extends CI_Model{

    public function getSluzba(){
        $query = $this->db->get('Sluzba');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function getSluzbaGroupID(){
        $query = $this->db->query("SELECT Vodic_ID FROM Sluzba GROUP BY Vodic_ID");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function submit(){
        $field = array(
            'Vodic_ID'=>$this->input->post('vodic_id'),
            'Datum'=>$this->input->post('datum')
        );
        $this->db->insert('Sluzba', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function getSluzbaById($id){
        $this->db->where('ID', $id);
        $query = $this->db->get('Sluzba');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function update(){
        $id = $this->input->post('txt_hidden');
        $field = array(
            'Vodic_ID'=>$this->input->post('vodic_id'),
            'Datum'=>$this->input->post('datum')
        );
        $this->db->where('ID', $id);
        $this->db->update('Sluzba', $field);
        echo $this->db->last_query();extit;
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id){
        $this->db->where('ID', $id);
        $this->db->delete('Sluzba');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }



}