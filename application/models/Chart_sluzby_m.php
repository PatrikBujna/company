<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Chart_sluzby_m extends CI_Model{

    public function get_sluzby(){
        $query = $this->db->query("SELECT v.Meno AS meno, v.Priezvisko AS priezvisko, COUNT(s.ID) AS pocet FROM Sluzba s INNER JOIN Vodic v ON v.ID = s.Vodic_ID GROUP BY v.ID");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
}