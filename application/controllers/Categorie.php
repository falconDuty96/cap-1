<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Categorie extends CI_Controller {

        public function __construct() {
            parent::__construct() ;
            $this->load->model('CategorieModel',"categorie") ;
        }
        public function index() {
            $this->load->view('admin/categorie',array(
                'categorie' => $this->categorie->getAllCategorie() ,
            )) ;
        }
        
        public function register() {
            $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
            $this->form_validation->set_rules('categorie_nom','categorie_nom','required', array(
                'required' => 'Ce champ est obligatoire !'
            )) ;
            if($this->form_validation->run() === FALSE) {
                $this->load->view('admin/categorie',array(
                    'categorie' => $this->categorie->getAllCategorie() ,
                )) ;
            }
            else {
                $data = array(
                    'categorie_nom' => $this->input->post('categorie_nom') ,
                );
                $this->categorie->registerCategorie($data) ;
                redirect('categorie') ;
            }
        }

        public function supprimer($id) {
            $this->categorie->deleteCategorie($id) ;
            redirect('categorie') ;
        } 
        public function modifier($id) {
            $this->categorie->updateCategorie($this->input->post('categorie_nom'),$id) ;
            redirect('categorie') ;
        }
    }