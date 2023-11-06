<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('admin/finsemaine_model');
    }

    public function index(){
        $this->load->view('header');

        $data=array();
        $data['services'] = $this->finsemaine_model->getService();
        $this->load->view('admin/test_list', $data);

        $this->load->view('footer');
    }

}

?>