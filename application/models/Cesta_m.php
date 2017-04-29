<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cesta_m extends CI_Model{

    public function getCesta(){
        $query = $this->db->query("SELECT c.ID, o.Ulica AS oUlica, o.Mesto AS oMesto, k.Ulica AS kUlica, k.Mesto AS kMesto, a.Znacka, a.Typ, c.Cena, c.Datum FROM Cesta c 
                                    INNER JOIN Odkial o ON o.ID = c.Odkial_ID
                                    INNER JOIN Kam k ON k.ID = c.Kam_ID
                                    INNER JOIN Auto a ON a.ID = c.Auto_ID");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function getAllOdkial(){
        $query = $this->db->query("SELECT * FROM Odkial");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function getAllKam(){
        $query = $this->db->query("SELECT * FROM Kam");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function getAllAuto(){
        $query = $this->db->query("SELECT * FROM Auto");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function submit(){
        $field = array(
            'Odkial_ID'=>$this->input->post('odkial_id'),
            'Kam_ID'=>$this->input->post('kam_id'),
            'Auto_ID'=>$this->input->post('auto_id'),
            'Cena'=>$this->input->post('cena'),
            'Datum'=>$this->input->post('datum')
        );
        $this->db->insert('Cesta', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function getCestaById($id){
        $this->db->where('ID', $id);
        $query = $this->db->get('Cesta');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function update(){
        $id = $this->input->post('txt_hidden');
        $field = array(
            'Odkial_ID'=>$this->input->post('odkial_id'),
            'Kam_ID'=>$this->input->post('kam_id'),
            'Auto_ID'=>$this->input->post('auto_id'),
            'Cena'=>$this->input->post('cena'),
            'Datum'=>$this->input->post('datum')
        );
        $this->db->where('ID', $id);
        $this->db->update('Cesta', $field);
        echo $this->db->last_query();extit;
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id){
        $this->db->where('ID', $id);
        $this->db->delete('Cesta');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

}