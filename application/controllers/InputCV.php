<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class InputCV extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('client/inputCV_model');
        }

        public function index() {
            $this->load->view('header');

            $data=array();
            $data['states'] = $this->inputCV_model->getState();
            $this->load->view('Client/inputCV', $data);

            $this->load->view('footer');
        }

        public function traitInsertionCV() {
            $nom = $this->input->post('nom');
            $prenom = $this->input->post('prenom');
            $birthday = $this->input->post('date_de_naissance');
            $adresse = $this->input->post('adresse');
            $phone = $this->input->post('phone');
            $email = $this->input->post('mail');
            $experience = $this->input->post('experience');
            $patrimoniale = $this->input->post('etat');

            $data = $this->inputCV_model->;
        }
        
    }
?>