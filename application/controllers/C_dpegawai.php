<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class C_dpegawai extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->load->view('V_dpegawai');
            
        }
}

?>