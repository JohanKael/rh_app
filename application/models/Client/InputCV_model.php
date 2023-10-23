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

    public function getForeignKey($tableName, $primaryKey, $condition) {
        $sql = "SELECT * FROM $tableName WHERE $primaryKey = $condition";
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $nom = $row["$primaryKey"];
        } else {
            echo "Aucun résultat trouvé pour cet ID.";
        }
    }

    public function insertIdentite($nom, $prenom, $birthday, $adresse) {
        $sql = "INSERT INTO identite(nom, prenom, date_naissance, adresse) VALUES(%s,%s,%s,%s)";
        $sql = sprintf($sql,$this->db->escape($nom),$this->db->escape($prenom),$this->db->escape($birthday),$this->db->escape($adresse));
        $this->db->query($sql);
    }

    public function insertionCV($idIdentite, $idContact, $idExperience, $idPatrimoniale) {
        $sql = "INSERT INTO cv(idIdentite, idContact, idExperience, idPatrimoniale) VALUES(%s,%s,%s,%s)";
        $sql = sprintf($sql, $this->db->escape($idIdentite), $this->db->escape($idContact), $this->db->escape($idExperience), $this->db->escape($idPatrimoniale));
        $this->db->query($sql);
    }

}

?>