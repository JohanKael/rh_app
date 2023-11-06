<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crudModel extends CI_Model {

    public function insert_data($data,$Table)
    {

        $this->db->insert($Table, $data);
        $this->db->affected_rows() > 0;

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

    public function update_data($id,$data,$nom_table)
{

    $this->db->where($id, $id);
    $this->db->update($nom_table, $data);
    $updated = $this->db->affected_rows() > 0;

    if ($updated) {
        echo 'Les données ont été mises à jour avec succès.';
    } else {
        echo 'Erreur lors de la mise à jour des données.';
    }
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
}
?>