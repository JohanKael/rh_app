<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruit_model extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getServiceDemand(){
        $this->db->select('serv.idDemand, serv.idService, recrut, besoin.idDiplome, besoin.anneeExperience, besoin.idSitMatrimoniale, besoin.idSexe, besoin.idNationalite');
        $this->db->from('serviceDemand serv');
        $this->db->join('besoin', 'serv.idService = besoin.idService', 'inner');
        $query = $this->db->get();
        return $query->result();
    }

}

?>