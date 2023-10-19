<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BesoinController extends CI_Controller {

    public function dataa() {
        // Retrieve the form data
        $data = array(
            'idService' => $this->input->post('id_service'),  // Assuming id_service is passed in the form
            'idDiplome' => $this->input->post('diplome'),
            'anneeExperience' => $this->input->post('experience'),
            'idSitMatrimoniale' => $this->input->post('matrimoniale'),
            'idSexe' => $this->input->post('genre'),
            'idNationalite' => $this->input->post('nationalite')
        );

return $data;
    }
            // Call the model to insert the data
            $this->load->model(''); // Load your model
            $Table = 'besoin'; // Table name is 'besoin'
            $this->YourModel->insert_data(dataa(), $Table);
}
