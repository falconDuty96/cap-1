<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Questionnaire extends CI_Controller {

        public function __construct() {
            parent::__construct() ;
            $this->load->model("ModeModel","mode") ;
            $this->load->model('CategorieModel',"categorie") ;
            $this->load->model("ClasseModel","classe") ;

        }

        public function index() {
            $this->load->view('admin/questionnaire',array(
                'mode' => $this->mode->getAllMode() ,
                'categorie' => $this->categorie->getAllCategorie() ,
                'classe' => $this->classe->getAllClasse() ,
            )) ;
        }
        public function register() {
            $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
            $this->form_validation->set_rules('mode_nom','mode_nom','required', array(
                'required' => 'Ce champ est obligatoire !'
            )) ;
            if($this->form_validation->run() === FALSE) {
                $this->load->view('admin/mode',array(
                    'mode' => $this->mode->getAllMode() ,
                )) ;
            }
            else {
                $data = array(
                    'mode_nom' => $this->input->post('mode_nom') ,
                );
                $this->mode->registerMode($data) ;
                redirect('mode') ;
            }
        }

        public function supprimer($id) {
            $this->mode->deleteMode($id) ;
            redirect('mode') ;
        } 
        public function modifier($id) {
            $this->mode->updateMode($this->input->post('mode_nom'),$id) ;
            redirect('mode') ;
        }
    }