<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_pkl extends CI_Model {
        function __construct() {
            parent::__construct();
        }

        // Get semua data
        public function login_check($table, $where) {
            return $this->db->get_where($table, $where);
        }

        public function insert_user($data) {
            return $this->db->insert('calon_pkl', $data);
        }

        public function getData() {
            $this->db->select('');
            $this->db->from('calon_pkl');
            $query = $this->db->get();
            return $query->result();
        }

        public function getAData($id) {
            $this->db->select();
            $this->db->from('calon_pkl');
            $this->db->where('id_pkl', $id);
            $query = $this->db->get();
            return $query->row();
        }
        public function update_user($id_pkl,$data) {
            $this->db->where('id_pkl', $id_pkl);
            return $this->db->update('calon_pkl', $data);
        }
        public function insert_siswa($data) {
            return $this->db->insert('calon_pkl', $data);
        }
        public function delete_siswa($id_pkl,$data) {
            $this->db->where('id_pkl', $id_pkl);
            return $this->db->update('calon_pkl');
        }
    }
?>