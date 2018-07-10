<?php
class Negara extends CI_Controller {

        public function index()
        {
                $this->load->model('mstnegara_model', 'negara');
                $data['negara'] = $this->negara->get_negara();
                $this->load->view('negara/index', $data);
        }
}