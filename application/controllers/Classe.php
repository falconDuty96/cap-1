<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Classe extends CI_Controller {

        public function __construct() {
            parent::__construct() ;
            $this->load->model("ClasseModel","classe") ;
        }

        public function index() {
            $this->load->view('admin/classe',array(
                'classe' => $this->classe->getAllClasse() ,
            )) ;
        }
        public function register() {
            $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
            $this->form_validation->set_rules('classe_nom','classe_nom','required', array(
                'required' => 'Ce champ est obligatoire !'
            )) ;
            if($this->form_validation->run() === FALSE) {
                $this->load->view('admin/classe',array(
                    'classe' => $this->classe->getAllClasse() ,
                )) ;
            }
            else {
                $data = array(
                    'classe_nom' => $this->input->post('classe_nom') ,
                );
                $this->classe->registerClasse($data) ;
                redirect('classe') ;
            }
        }

        public function supprimer($id) {
            $this->classe->deleteClasse($id) ;
            redirect('classe') ;
        } 
        public function modifier($id) {
            $this->classe->updateClasse($this->input->post('classe_nom'),$id) ;
            redirect('classe') ;
        }
    }