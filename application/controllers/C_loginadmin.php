<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class C_loginadmin extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->load->view('V_loginadmin');
            
        }

        public function admin()
        {
            $this->load->view('V_admin');
        }
}

?>