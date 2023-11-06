<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class InputCV extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('admin/crudModel');
        }

        public function index() {
            $this->load->view('header');

            $data=array();
            $data['states'] = $this->crudModel->getState();
            $this->load->view('Client/inputCV', $data);

            $this->load->view('footer');
        }

        public function traitInsertionCV() {
            $tableIdentite = 'identite'; $tableContact = 'contact'; $tableExperience = 'experience';
            $dataIdentite = array(
                'nom' => $this->input->post('nom'),
                'prenom' => $this->input->post('prenom'),
                'date_naissance' => $this->input->post('date_de_naissance'),
                'adresse' => $this->input->post('adresse')
            );
            // $nom = $this->input->post('nom');
            // $prenom = $this->input->post('prenom');
            // $birthday = $this->input->post('date_de_naissance');
            // $adresse = $this->input->post('adresse');

            $data = $this->crudModel->insert_data($dataIdentite,$tableIdentite);
            $this->load->view('client/inputCV');
        }
        
    }
?>