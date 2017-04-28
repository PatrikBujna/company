<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sluzba_m extends CI_Model{

    public function getSluzba(){
        $query = $this->db->query("SELECT s.ID, s.Datum, v.Meno AS vMeno, v.Priezvisko AS vPriezvisko FROM Sluzba s 
                                    INNER JOIN Vodic v ON s.Vodic_ID = v.ID ORDER BY s.ID ");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function getSluzbaGroupID(){
        $query = $this->db->query("SELECT s.Vodic_ID, v.Meno AS vMeno, v.Priezvisko AS vPriezvisko FROM Sluzba s 
                                    INNER JOIN Vodic v ON s.Vodic_ID = v.ID 
                                    GROUP BY s.Vodic_ID");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function submit(){
        $str = $this->input->post('vodic_id');
        $parts = explode(" ", $str);
        $meno = $parts[0];
        $priezvisko = $parts[1];


        $query = $this->db->query("SELECT s.Vodic_ID FROM Sluzba s 
                                INNER JOIN Vodic v ON s.Vodic_ID = v.ID 
                                WHERE v.Meno LIKE '$meno' AND v.Priezvisko LIKE '$priezvisko'
                                GROUP BY s.Vodic_ID");

        $result = $query->result();
        $ID = $result[0]->Vodic_ID;

        $field = array(
            'Vodic_ID'=>$ID,
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
        $str = $this->input->post('vodic_id');
        $parts = explode(" ", $str);
        $meno = $parts[0];
        $priezvisko = $parts[1];

        $query = $this->db->query("SELECT s.Vodic_ID FROM Sluzba s 
                                INNER JOIN Vodic v ON s.Vodic_ID = v.ID 
                                WHERE v.Meno LIKE '$meno' AND v.Priezvisko LIKE '$priezvisko'
                                GROUP BY s.Vodic_ID");

        $result = $query->result();
        $ID = $result[0]->Vodic_ID;

        $field = array(
            'Vodic_ID'=>$ID,
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