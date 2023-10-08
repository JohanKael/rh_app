<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruit_model extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getServiceDemand(){
        $this->db->select('*');
        $this->db->from('serviceDemand');
        $this->db->join('services');
    }

}

?>