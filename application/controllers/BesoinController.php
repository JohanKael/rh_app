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
            'nomservice' => $this->input->post('nom_service'),
            'heureTravail' => $this->input->post('heureVoulu'),
            'hommeJour' => $this->input->post('HommeJour')
        );
        $Tablee = "services";
        $this->crudModel->insert_data($dataService, $Tablee);
        $idService =  $this->crudModel->get_idService($dataService);

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
            redirect('index.php/recruit');
    }

}
