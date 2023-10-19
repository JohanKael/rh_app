<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BesoinController extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Admin/crudModel');
 }

    public function index() {
        // Retrieve the form data
        $dataService = array(
            'nom_service' => $this->input->post('nom_service'),
            'heureVoulu' => $this->input->post('heureVoulu'),
            'Hommejour' => $this->input->post('Hommejour')
        );
        $Tablee = "services";
        $this->crudModel->insert_data($dataService, $Tablee);
        $idService =  $this->crudModel->get_idService($dataService, $Tablee);

        $data = array(
            'idService' => $idService,
            'idDiplome' => $this->input->post('diplome'),
            'anneeExperience' => $this->input->post('experience'),
            'idSitMatrimoniale' => $this->input->post('matrimoniale'),
            'idSexe' => $this->input->post('genre'),
            'idNationalite' => $this->input->post('nationalite')
        );

            // Call the model to insert the data
            $Table = 'besoin'; // Table name is 'besoin'
            $this->crudModel->insert_data($data, $Table);

    }

}
