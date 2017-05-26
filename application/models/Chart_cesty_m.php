<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Chart_cesty_m extends CI_Model{

    public function get_activity(){
        $query = $this->db->query("SELECT MONTH(Datum) AS mesiac, COUNT(ID) AS pocet FROM `Cesta` GROUP BY MONTH(Datum)");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
}