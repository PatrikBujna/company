<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Chart_odchod_m extends CI_Model{

    public function get_odchod(){
        $query = $this->db->query("SELECT Mesto, COUNT(ID) AS pocet FROM Odkial GROUP BY Mesto");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
}