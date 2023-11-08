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

public function get_idService($data){
    $this->db->select('idService');
    $this->db->where('nomservice', $data['nomservice']);
    $this->db->where('heureTravail', $data['heureTravail']);
    $this->db->where('hommeJour', $data['hommeJour']);
    $query = $this->db->get('services');
    $array = array();
        $row = $query->row();
        return $row->idService; 
}
public function get_id($table_name, $data,$NomID) {
    $this->db->select($NomID);
    foreach ($data as $key => $value) {
        $this->db->where($key, $value);
    }
    $query = $this->db->get($table_name);
    $row = $query->row();
    if ($row) {
        return $row->$NomID;
    } else {
        return null; // Ou toute autre indication que l'ID n'a pas été trouvé
    }
}


public function get_etat($choice){
    $this->db->select('idSitMatrimoniale');
    $this->db->where('descriSitMatrimoniale', $choice);
    $query = $this->db->get('sitMatrimoniale');
    $row = $query->row();
    if ($row) {
        return $row->idSitMatrimoniale;
    } else {
        return null; // Ou toute autre indication que l'ID n'a pas été trouvé
    }
}

//** ------------------------------------------------------------------------------------------------- */
/** Fin partie Client */

}


