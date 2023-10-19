<?php
    defined('BASEPATH') or exit('No direct access');
    class allModel extends CI_Model {
        public function get_sex(){
            $this->db->select('*');
            $this->db->from('sexe');
            $query = $this->db->get();
            $array = array();
            foreach($query->result_array() as $res){
                $ar = array(
                    "idSex" => $res['idSexe'],
                    "sex" => $res['descriSexe']
                );
                array_push($array,$ar);
            }
            return $array;
        }
        
        public function get_nationalites(){
            $this->db->select('*');
            $this->db->from('nationalite');
            $query = $this->db->get();
            $array = array();
            foreach($query->result_array() as $res){
                $ar = array(
                    "idNationalite" => $res['idNationalite'],
                    "nation" => $res['nation']
                );
                array_push($array,$ar);
            }
            return $array;
        }

        public function get_diplomes(){
            $this->db->select('*');
            $this->db->from('diplome');
            $query = $this->db->get();
            $array = array();
            foreach($query->result_array() as $res){
                $ar = array(
                    "idDiplome" => $res['idDiplome'],
                    "descriDiplome" => $res['descriDiplome']
                );
                array_push($array,$ar);
            }
            return $array;
        }
        
        public function get_situations_matrimoniales(){
            $this->db->select('*');
            $this->db->from('sitMatrimoniale');
            $query = $this->db->get();
            $array = array();
            foreach($query->result_array() as $res){
                $ar = array(
                    "idSitMatrimoniale" => $res['idSitMatrimoniale'],
                    "descriSitMatrimoniale" => $res['descriSitMatrimoniale']
                );
                array_push($array,$ar);
            }
            return $array;
        }
               
        public function get_idService(){
            $this->db->select('idService');
            $this->db->from('services');
            $query = $this->db->get();
            $array = array();
            foreach($query->result_array() as $res){
                $ar = array(
                    "idService" => $res['idService']
                );
                array_push($array,$ar);
            }
            return $array;
        } 
        
    }
?>