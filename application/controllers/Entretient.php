<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Entretient extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->model('client/Entretient_model');
        }

        public function index(){
            $this->load->view('header');
            // $this->load->view('');
            $this->load->view('footer');
        }	

    }
    

?>