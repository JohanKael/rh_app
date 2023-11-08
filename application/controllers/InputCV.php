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
            

            $tableIdentite = 'identite'; $tableContact = 'contact'; $tableExperience = 'experience'; $tableCV = 'cv';
            $dataIdentite = array(
                'nom' => $this->input->post('nom'),
                'prenom' => $this->input->post('prenom'),
                'date_naissance' => $this->input->post('date_de_naissance'),
                'adresse' => $this->input->post('adresse')
            );
            $data1 = $this->crudModel->insert_data($dataIdentite,$tableIdentite);
            $_idIdentite = 'idIdentite';

            $dataContact = array(
                'telephone' => $this->input->post('phone'),
                'email' => $this->input->post('mail')
            );
            $data2 = $this->crudModel->insert_data($dataContact,$tableContact);
            $_idContact = 'idContact';

            $dataExperience = array(
                'annee' => $this->input->post('experience')
            );
            $data3 = $this->crudModel->insert_data($dataExperience,$tableExperience);
            $_idExperience = 'idExperience';
            echo $choix;
            // Situation patrimoniale
            $ids = array(
                'idContact' => $this->crudModel->get_id($tableContact,$dataContact,$_idContact),
                'idExperience' => $this->crudModel->get_id($tableExperience,$dataExperience ,$_idExperience),
                'idSitMatrimoniale' => $this->input->post('etat'),
                'idIdentite' => $this->crudModel->get_id($tableIdentite ,$dataIdentite ,$_idIdentite)
            );
            $data4 = $this->crudModel->insert_data($ids,$tableCV);
            redirect('index.php/InputCV');

        }
        
    }
?>