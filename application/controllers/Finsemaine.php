<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finsemaine extends CI_Controller {

        public function __construct(){
               parent::__construct();
               $this->load->model('admin/finsemaine_model');
        }

	public function index(){
                $this->load->view('header');

                $data=array();       
                $data['services'] = $this->finsemaine_model->getService();
                $this->load->view('admin/findesemaine', $data);

                
                $this->load->view('footer');
	}	

        public function traitFinSemaine(){
                $service = $this->input->post('service');
                $heure = $this->input->post('heure');

                $data = $this->finsemaine_model->getServiceById($service);
                $heurebase = $data->heureTravail;
                $homme = $data->hommeJour;

                $decision = $this->finsemaine_model->compareHours($heure, $heurebase);
                if($decision == true){
                        $recruit = $this->finsemaine_model->recruitAgent($heurebase, $heure, $homme);
                }
                $recruit = round($recruit);

                $this->finsemaine_model->recruit($service, $recruit);

                redirect('index.php/welcome');
        }

}

?>