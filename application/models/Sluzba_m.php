<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sluzba_m extends CI_Model{

    public function getSluzba($limit = 0, $offset = 0){
        if($offset != NULL) {
            $query = $this->db->query("SELECT s.ID, s.Datum, v.Meno AS vMeno, v.Priezvisko AS vPriezvisko FROM Sluzba s 
                                    INNER JOIN Vodic v ON s.Vodic_ID = v.ID ORDER BY s.ID LIMIT $offset, $limit");
        }else{
            $query = $this->db->query("SELECT s.ID, s.Datum, v.Meno AS vMeno, v.Priezvisko AS vPriezvisko FROM Sluzba s 
                                    INNER JOIN Vodic v ON s.Vodic_ID = v.ID ORDER BY s.ID LIMIT 0, $limit");
        }

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function getAllVodic(){
        $query = $this->db->query("SELECT * FROM Vodic");

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

        $query = $this->db->query("SELECT ID FROM Vodic 
                                    WHERE Meno LIKE '$meno' AND Priezvisko LIKE '$priezvisko'");
        $result = $query->result();
        $ID = $result[0]->ID;

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

        $query = $this->db->query("SELECT ID FROM Vodic 
                                    WHERE Meno LIKE '$meno' AND Priezvisko LIKE '$priezvisko'");

        $result = $query->result();
        $ID = $result[0]->ID;

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