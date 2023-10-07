<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finsemaine_model extends CI_Model{

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getService(){
        $query = $this->db->get('services');
        return $query->result();
    }

    public function getServiceById($idService){
        $this->db->select('*');
        $this->db->from('services');
        $this->db->where('idService', $idService);
        $query = $this->db->get();
        return $query->row();
    }

    public function compareHours($hour1, $hour2){
        if($hour1 < $hour2){
            return true;
        }else{
            return false;
        }
    }

    public function recruitAgent($hour1, $hour2, $homme){
        $blank = $hour1 - $hour2;
        $recruit = ($blank * $homme) / $hour2;
        return $recruit;
    }

}

?>