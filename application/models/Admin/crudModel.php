<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crudModel extends CI_Model {

    public function insert_data($data,$Table)
    {
        // Insérer les données dans la table
        $this->db->insert($Table, $data);
        $inserted = $this->db->affected_rows() > 0;
        
        // Vérifier si l'insertion a réussi
        // if ($inserted) {
        //    $this->load->view($newView);
        // } else {
        //     echo 'Erreur lors de l\'insertion des données.';
        // }
        // Vérifier si l'insertion a réussi
        
    }

    public function delete_data($id,$Table)
    {

    $this->db->where('id', $id);
    $this->db->delete($Table);
    $deleted = $this->db->affected_rows() > 0;

        if ($deleted) {
            echo 'Les données ont été supprimées avec succès.';
        } else {
            echo 'Erreur lors de la suppression des données.';
        }
    }

    public function update_data($id,$data)
{

    $this->db->where('id', $id);
    $this->db->update('votre_table', $data);
    $updated = $this->db->affected_rows() > 0;

    if ($updated) {
        echo 'Les données ont été mises à jour avec succès.';
    } else {
        echo 'Erreur lors de la mise à jour des données.';
    }
}

//** ------------------------------------------------------------------------------------------------- */
/** Debut partie Client */

public function getState() {
    $query = $this->db->get('sitMatrimoniale');
    $array = array();
    foreach($query->result_array() as $res){
        $ar = array(
            'idSitMatrimoniale' => $res['idSitMatrimoniale'],
            'descriSitMatrimoniale' => $res['descriSitMatrimoniale']
        );
        array_push($array,$ar);
    }
    return $array;
}

public function getId_Element($idAttribut,$table){
    $this->db->select($idAttribut);
    $this->db->from($table);
    $query = $this->db->get();
    $array = array();
    foreach($query->result_array() as $res){
        $ar = array(
            $idAttribut => $res[$idAttribut]
        );
        array_push($array,$ar);
    }
    return $array;
}

public function get_etat($choice){
    $this->db->select('idSitMatrimoniale');
    $this->db->from('sitMatrimoniale');
    $this->db->where('descriSitMatrimoniale', $choice);
    $query = $this->db->get();
    $array = array();
    foreach($query->result_array() as $res){
        $ar = array(
            "idSitMatrimoniale" => $res['idSitMatrimoniale']
        );
        array_push($array,$ar);
    }
    return $array;
} 

//** ------------------------------------------------------------------------------------------------- */
/** Fin partie Client */

}


