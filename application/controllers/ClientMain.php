<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class ClientMain extends CI_Controller {
    
        public function __construct(){
            parent::__construct();
            $this->load->model('client/clientmain_model');
        }
    
        public function index(){
            $this->load->view('header');
            $this->load->view('client/inputCV');
            $this->load->view('footer');
        }	
    
    }
    
?>
