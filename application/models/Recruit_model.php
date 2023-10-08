<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruit_model extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getServiceDemand(){
        $this->db->select('*');
        $this->db->from('serviceDemand serv');
        $this->db->join('besoin b', 'serv.idService = b.idService', 'inner');
        $this->db->join('services s', 'serv.idService = s.idService', 'inner');
        $this->db->join('diplome di', 'b.idDiplome = di.idDiplome', 'inner');
        $this->db->join('sitMatrimoniale sit', 'b.idSitMatrimoniale = sit.idSitMatrimoniale', 'inner');
        $this->db->join('sexe', 'b.idSexe = sexe.idSexe', 'inner');
        $this->db->join('nationalite nat', 'b.idNationalite = nat.idNationalite', 'inner');
        $query = $this->db->get();
        return $query->result();
    }

    public function deleteById($idDemand){
        $this->db->where('idDemand', $idDemand);
        $this->db->delete('serviceDemand');
    }

}

?>