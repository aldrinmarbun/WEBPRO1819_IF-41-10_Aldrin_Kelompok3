<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class C_pkl extends CI_Controller {
        function __construct() {
            parent::__construct();
            $this->load->model('M_pkl');
        }

        public function index(){
            $this->load->view('pkl/home');
        }

        public function login(){
            $where = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
            $cek = $this->M_pkl->login_check('calon_pkl', $where)->num_rows();
            if ($cek > 0) {
                $data_session = array(
                    'username' => $username,
                    'status' => 'login'
                );
                $this->session->set_flashdata($data_session);
                redirect('C_pkl');
            }
        }

        public function logout(){
            $this->session->sess_destroy();
            redirect('C_pkl');
        }

        public function form_register(){
            $this->load->view('pkl/register');
        }

        public function register(){
            $pass = $this->input->post('password');
            $confirm_pass = $this->input->post('confirm_pass');
            if ($pass==$confirm_pass){
                $data = array(
                    'nama_sekolah' => $this->input->post('nama_sekolah'),
                    'email' => $this->input->post('email'),
                    'alamat_sekolah' => $this->input->post('alamat_sekolah'),
                    'password' => $this->input->post('password'),
                    'no_hp' => $this->input->post('no_hp'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'mulai' => $this->input->post('mulai'),
                    'selesai' => $this->input->post('selesai')
                );
                $cek = $this->M_pkl->insert_user($data);
                if ($cek) {
                    $this->session->set_flashdata('info', 'success');
                    redirect('C_pkl');
                } else {
                    $this->session->set_flashdata('info', 'failed');
                    redirect('C_pkl/form_register');
                }
            } else {
                $this->session->set_flashdata('info', 'passfailed');
                redirect('C_pkl/form_register');
            }
        }

        public function pengumuman() {
            $d['data'] = $this->M_pkl->getData();
            $this->load->view('pkl/pengumuman', $d);
        }

        public function form_editprofil() {
            $d['data'] = $this->M_pkl->getAData(1);
            $this->load->view('pkl/editprofil', $d);
        }

        public function editprofil() {
            $data = array(
                'nama_sekolah' => $this->input->post('nama_sekolah'),
                'email' => $this->input->post('email'),
                'alamat_sekolah' => $this->input->post('alamat_sekolah'),
                'password' => $this->input->post('password'),
                'no_hp' => $this->input->post('no_hp'),
                'kode_pos' => $this->input->post('kode_pos'),
                'mulai' => $this->input->post('mulai'),
                'selesai' => $this->input->post('selesai')
            );
            $this->M_pkl->update_user(1, $data);
            redirect('C_pkl/form_editprofil');
        }
    }
?>