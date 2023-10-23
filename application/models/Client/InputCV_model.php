<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InputCV_model extends CI_Model{

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getState() {
        $query = $this->db->get('sitMatrimoniale');
        return $query->result();
    }

}

?>