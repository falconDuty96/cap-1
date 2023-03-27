<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Admin extends CI_Controller {
        public function __construct() {
            parent::__construct() ;
            $this->load->model('CategorieModel',"categorie") ;
        }
        public function index() {
            $this->load->view('admin/index',array(
                'categorie' => $this->categorie->getAllCategorie() ,
            )) ;
        }
    }