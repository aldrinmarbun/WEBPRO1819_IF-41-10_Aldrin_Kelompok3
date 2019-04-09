<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class C_main_view extends CI_Controller {
        function __construct() {
            parent::__construct();
        }

        public function index(){
            $content['title'] = 'Global Intermedia Nusantara';
            $content['main_content'] = 'content/beranda';
            $content['sidebar'] = true;
            $this->load->view('template', $content);
        }

        public function viewProfil(){
            $content['title'] = 'Profil';
            $content['main_content'] = 'content/profil';
            $content['sidebar'] = true;
            $this->load->view('template', $content);
        }

        public function viewBerita(){
            $content['title'] = 'Berita';
            $content['main_content'] = 'content/berita';
            $content['sidebar'] = true;
            $this->load->view('template', $content);
        }

        public function viewSolusi(){
            $content['title'] = 'Solusi';
            $content['main_content'] = 'content/solusi';
            $content['sidebar'] = true;
            $this->load->view('template', $content);
        }

        public function viewPortfolio(){
            $content['title'] = 'Portfolio';
            $content['main_content'] = 'content/portfolio';
            $content['sidebar'] = true;
            $this->load->view('template', $content);
        }

        public function viewKarir(){
            $content['title'] = 'Karir';
            $content['main_content'] = 'content/karir';
            $content['sidebar'] = true;
            $this->load->view('template', $content);
        }

        public function viewKontak(){
            $content['title'] = 'Kontak';
            $content['main_content'] = 'content/kontak';
            $content['sidebar'] = true;
            $this->load->view('template', $content);
        }

        public function viewGaleri(){
            $content['title'] = 'Galeri';
            $content['main_content'] = 'content/galeri';
            $content['sidebar'] = false;
            $this->load->view('template', $content);
        }
    }
?>