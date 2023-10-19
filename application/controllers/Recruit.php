<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruit extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('recruit_model');
    }

    public function index(){
        $this->load->view('header');

        $data['info'] = $this->recruit_model->getServiceDemand();
        $this->load->view('recruit_view', $data);

        $this->load->view('footer');
    }

    public function delete($idDemand){
        $this->recruit_model->deleteById($idDemand);

        redirect('index.php/recruit');
    }

}


?>