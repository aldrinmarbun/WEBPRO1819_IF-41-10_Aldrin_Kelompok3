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

        public function profil(){
            $content['title'] = 'Profil';
            $content['main_content'] = 'content/profil';
            $content['sidebar'] = true;
            $this->load->view('template', $content);
        }

        public function berita(){
            $content['title'] = 'Berita';
            $content['main_content'] = 'content/berita';
            $content['sidebar'] = true;
            $this->load->view('template', $content);
        }

        public function solusi(){
            $content['title'] = 'Solusi';
            $content['main_content'] = 'content/solusi';
            $content['sidebar'] = true;
            $this->load->view('template', $content);
        }

        public function portfolio(){
            $content['title'] = 'Portfolio';
            $content['main_content'] = 'content/portfolio';
            $content['sidebar'] = true;
            $this->load->view('template', $content);
        }

        public function karir(){
            $content['title'] = 'Karir';
            $content['main_content'] = 'content/karir';
            $content['sidebar'] = true;
            $this->load->view('template', $content);
        }

        public function kontak(){
            $content['title'] = 'Kontak';
            $content['main_content'] = 'content/kontak';
            $content['sidebar'] = true;
            $this->load->view('template', $content);
        }

        public function galeri(){
            $content['title'] = 'Galeri';
            $content['main_content'] = 'content/galeri';
            $content['sidebar'] = false;
            $this->load->view('template', $content);
        }

        //halaman yang ada di profil
        public function sejarah()
        {
            $content['title'] = 'Sejarah';
            $content['main_content'] = 'content/profil/sejarah';
            $ccontent['sidebar'] = true;
            $this->load->view('template',$content);
        }

        public function tanggungjawab()
        {
            $content['title'] = 'Tanggung Jawab';
            $content['main_content'] = 'content/profil/tanggungjawab';
            $ccontent['sidebar'] = true;
            $this->load->view('template',$content);
        }
    }
?>