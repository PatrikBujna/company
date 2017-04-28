<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auto_m extends CI_Model{

    public function getAuto(){
        $query = $this->db->query("SELECT a.ID, a.Znacka, a.Typ, a.SPZ, v.Meno AS vMeno, v.Priezvisko AS vPriezvisko FROM Auto a INNER JOIN Vodic v ON a.Vodic_ID = v.ID");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function getAutoGroupID(){
        $query = $this->db->query("SELECT a.Vodic_ID, a.Znacka, a.Typ, a.SPZ, v.Meno AS vMeno, v.Priezvisko AS vPriezvisko FROM Auto a INNER JOIN Vodic v ON a.Vodic_ID = v.ID GROUP BY a.Vodic_ID");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function submit(){
        $field = array(
            'Vodic_ID'=>$this->input->post('vodic_id'),
            'Znacka'=>$this->input->post('znacka'),
            'Typ'=>$this->input->post('typ'),
            'SPZ'=>$this->input->post('spz')
        );
        $this->db->insert('Auto', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function getAutoById($id){
        $this->db->where('ID', $id);
        $query = $this->db->get('Auto');
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
            'Znacka'=>$this->input->post('znacka'),
            'Typ'=>$this->input->post('typ'),
            'SPZ'=>$this->input->post('spz')
        );
        $this->db->where('ID', $id);
        $this->db->update('Auto', $field);
        echo $this->db->last_query();extit;
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id){
        $this->db->where('ID', $id);
        $this->db->delete('Auto');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

}